PAGES = $(shell find pages -type f -name '*.css')
GLOBAL_DEPS = $(shell find . -type f -name '_*.scss')

.PHONY: watch

all: global.css $(PAGES)

%.css: %.scss
	sassc $^ $@

global.scss: $(GLOBAL_DEPS)
	touch global.scss

watch:
	find . -type f -name global.scss -o -name '_*.scss' -o -path ./pages/\*.scss | entr make
