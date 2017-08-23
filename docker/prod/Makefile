DOCKER ?= docker
GCLOUD ?= gcloud

GCR_REPO := gcr.io/etsy-gke-sandbox/php-ci-prod
DATE := $(shell date '+%Y-%m-%d_%H-%M')
SHA := $(shell git rev-parse HEAD)

default: container

deploy: container
	$(GCLOUD) $(DOCKER) -- push $(GCR_REPO):latest
	$(GCLOUD) $(DOCKER) -- push $(GCR_REPO):$(DATE)
	$(GCLOUD) $(DOCKER) -- push $(GCR_REPO):$(SHA)

container: 
	cp -R ../../app	./app
	rm -rf ./app/vendor
	$(DOCKER) build -t $(GCR_REPO):latest -t $(GCR_REPO):$(DATE) -t $(GCR_REPO):$(SHA) .

clean: 
	rm -rf ./app

.PHONY: container deploy default