DOCKER ?= docker
GCLOUD ?= gcloud

REPO := russjt/php-dummy-image-dev
DATE := $(shell date '+%Y-%m-%d_%H-%M')

default: container

deploy: container
	$(GCLOUD) $(DOCKER) -- push $(REPO):latest
	$(GCLOUD) $(DOCKER) -- push $(REPO):$(DATE)

container: 
	$(DOCKER) build -t $(REPO):latest -t $(REPO):$(DATE) .

.PHONY: container deploy default