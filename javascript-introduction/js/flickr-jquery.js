jQuery(document).ready(($) => {
  'use strict';

  // Configuration
  const flickrUrl = '//api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?';

  // Setup event handling
  const initialize = () => {
    $('#search-form').submit(search);
  };

  // Start the search
  const search = (event) => {
    event.preventDefault();

    const searchField = $('#search-field');
    if (searchField.prop('disabled')) {
      return;
    }

    const searchTerm = searchField.val();

    // Send HTTP request to Flickr
    $.ajax({
      url: flickrUrl,
      dataType: 'json',
      data: {
        tags: searchTerm,
        tagmode: 'all',
        format: 'json'
      }
    }).then(showResults);

    // Lock search
    $('#search-submit')
      .prop('disabled', true)
      .val('Suche läuft…');
  };

  const showResults = (data) => {
    // Release search
    $('#search-submit')
      .prop('disabled', false)
      .val('Suchen');

    const elements = data.items.map((photo) => {
      const li = $('<li>')
        .addClass('result')
        .click((event) => {
          showFullView(event, photo);
        });
      const a = $('<a>')
        .attr('href', '')
        .appendTo(li);
      const img = $('<img>')
        .attr('src', photo.media.m)
        .addClass('result-image')
        .appendTo(a);
      return li;
    });
    $('#results').html(elements);
  };

  const showFullView = (event, photo) => {
    event.preventDefault();

    let html = '';

    html +=
      `<h2>${photo.title}</h2>
      <p><img src="${photo.media.m}" alt="" class="fullview-image"></p>
      <p>Published: ${photo.published}</p>`;

    if (photo.tags.length > 0) {
      html += `<p>Tags: ${photo.tags}</p>`;
    }

    html +=
      `<p><a href="${photo.link}" target="_blank">${photo.link}</a></p>`;

    $('#fullview').html(html).focus();
  };

  // Start the engine
  initialize();

});