DOCKER ?= docker
GCLOUD ?= gcloud

REPO := russjt/php-dummy-image-prod
DATE := $(shell date '+%Y-%m-%d_%H-%M')

default: container

deploy: container
	$(GCLOUD) $(DOCKER) -- push $(REPO):latest
	$(GCLOUD) $(DOCKER) -- push $(REPO):$(DATE)

container: 
	cp -R ../../app	./app
	$(DOCKER) build -t $(REPO):latest -t $(REPO):$(DATE) .

clean: 
	rm -rf ./app

.PHONY: container deploy default