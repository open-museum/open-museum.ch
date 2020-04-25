FROM node:12

WORKDIR /src
RUN git clone https://github.com/open-museum/d3shooter

WORKDIR /src/d3shooter

RUN npm update

EXPOSE 3000

CMD npm start
