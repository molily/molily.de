(() => {
'use strict';

// Configure Underscore’s template() function
// to use curly braces as delimiters.
_.templateSettings = {
  escape: /\{\{(.+?)\}\}/g
};

/*
Model and Collection Classes
----------------------------
*/

const Photos = Backbone.Collection.extend({

  url: '//api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?',

  parse(response) {
    return response.items;
  },

  search(tags) {
    return this.fetch({
      dataType: 'jsonp',
      data: {
        tags: tags,
        format: 'json'
      }
    });
  }

});

/*
View Classes
------------
*/

const SearchView = Backbone.View.extend({

  template: _.template(`
    <p id="search">
      <label>Suche: <input type="search" class="searchterm" value="flower"></label>
      <input type="button" class="submit" value="Suchen">
    </p>
  `),

  events: {
    'click .submit': 'startSearch'
  },

  initialize() {
    this.listenTo(this.collection, 'sync', this.searchSuccess);
  },

  render() {
    // Do not pass the collection
    this.$el.html(this.template());
  },

  startSearch() {
    this.$('.submit').prop('disabled', true).val('Suche läuft…');
    const searchTerm = this.$('.searchterm').val();
    this.collection.search(searchTerm);
  },

  searchSuccess() {
    this.$('.submit').prop('disabled', false).val('Suchen');
  }

});

// Collection View

const PhotosView = Backbone.View.extend({

  initialize() {
    this.listenTo(this.collection, 'sync', this.render);
  },

  render() {
    const $el = this.$el.empty();
    this.collection.each((model) => {
      const view = new PhotoItemView({ model: model });
      view.render();
      $el.append(view.el);
    });
  }

});

// Item view

const PhotoItemView = Backbone.View.extend({

  tagName: 'li',

  className: 'result',

  template: _.template(`
    <a href=""><img src="{{media.m}}" class="result-image" alt=""></a>
  `),

  events: {
    click: 'showFullPhoto'
  },

  render() {
    this.$el.html(this.template(this.model.attributes));
  },

  showFullPhoto(event) {
    event.preventDefault();

    const fullPhotoView = new FullPhotoView({
      model: this.model,
      el: $('#fullview')
    });
    fullPhotoView.render();
  }

});

const FullPhotoView = Backbone.View.extend({

  template: _.template(`
    <h2>{{title}}</h2>
    <p><img src="{{media.m}}" alt="" class="fullview-image"></p>
    <p>Tags: {{tags}}</p>
    <p><a href="{{link}}" target="_blank">{{link}}</a></p>
  `),

  render() {
    this.$el.html(this.template(this.model.attributes));
  }

});

/*
Set up instances
----------------
*/

const photos = new Photos();

const searchView = new SearchView({
  collection: photos,
  el: $('#search')
});
searchView.render();

const photosView = new PhotosView({
  collection: photos,
  el: $('#results')
});

})();