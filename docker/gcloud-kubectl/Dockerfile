# Image with GCloud SDK and kubectl installed

FROM alpine:latest

# Install Google's Cloud SDK

ENV SDK_FILENAME google-cloud-sdk-166.0.0-linux-x86_64.tar.gz

RUN apk update \
    && apk add ca-certificates wget \
    && update-ca-certificates \
    && mkdir /opt \
    && cd /opt \
    && wget -q https://dl.google.com/dl/cloudsdk/channels/rapid/downloads/${SDK_FILENAME} \
    && tar -xzf ${SDK_FILENAME} \
    && rm ${SDK_FILENAME} \
    && ln -s /opt/google-cloud-sdk/bin/gcloud /usr/bin/gcloud \
    && apk -q add python \
    && apk add --update libintl \
    && apk add --virtual build_deps gettext \
    && cp /usr/bin/envsubst /usr/local/bin/envsubst \
    && apk del build_deps \
    && rm -rf /var/cache/apk/*
    
RUN gcloud components install kubectl && ln -s /opt/google-cloud-sdk/bin/kubectl /bin/kubectl