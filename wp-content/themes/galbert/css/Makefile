PAGES = $(shell find pages -type f -name '*.css')
GLOBAL_DEPS = $(shell find . -type f -name '_*.scss')

all: global.css $(PAGES)

%.css: %.scss
	sassc $^ $@

global.scss: $(GLOBAL_DEPS)
	touch global.scss
