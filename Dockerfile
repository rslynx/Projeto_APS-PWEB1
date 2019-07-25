FROM composer:latest

RUN addgroup -S -g 1000 ifpb
RUN adduser -S -u 1000 -G ifpb ifpb

USER ifpb
