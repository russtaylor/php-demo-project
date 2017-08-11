DOCKER ?= docker
GCLOUD ?= gcloud

GCR_REPO := gcr.io/etsy-gke-sandbox/php-ci-prod
HUB_REPO := russjt/php-dummy-image-prod
DATE := $(shell date '+%Y-%m-%d_%H-%M')

default: container

deploy: container
	$(GCLOUD) $(DOCKER) -- push $(GCR_REPO):latest
	$(GCLOUD) $(DOCKER) -- push $(GCR_REPO):$(DATE)
	docker push $(HUB_REPO):latest
	docker push $(HUB_REPO):$(DATE)

container: 
	cp -R ../../app	./app
	rm -rf ./app/vendor
	$(DOCKER) build -t $(GCR_REPO):latest -t $(GCR_REPO):$(DATE) -t $(HUB_REPO):$(DATE) -t $(HUB_REPO):latest .

clean: 
	rm -rf ./app

.PHONY: container deploy default