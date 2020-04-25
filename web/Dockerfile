FROM node:12

WORKDIR /src

RUN git clone https://github.com/open-museum/web web

WORKDIR /src/web

# RUN git checkout tags/<tag> -b master

RUN npm install

RUN npm run export

EXPOSE 5000

CMD npx serve __sapper__/export
