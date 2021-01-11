avifenc -j 10 --min 0 --max 40 -s 0 ~/Documents/testing-angular-flying-probe/flying-probe-1600.png flying-probe-1600-avifenc-min-0-max-40.avif

cavif --quality 60 ~/Documents/testing-angular-flying-probe/flying-probe-800.png  -o flying-probe-800-cavif-q60.avif
cavif --quality 50 ~/Documents/testing-angular-flying-probe/flying-probe-1600.png -o flying-probe-1600-cavif-q50.avif

cwebp -q 80 ~/Documents/testing-angular-flying-probe/flying-probe-800.png -o flying-probe-800-cwebp-q80.webp
cwebp -q 80 ~/Documents/testing-angular-flying-probe/flying-probe-1600.png -o flying-probe-1600-cwebp-q80.webp
