# TP_Docker_charles

Commandes utilisée : 	docker-compose up --build -d
						docker exec -ti "nom container" /bin/bash


Les lignes dans dockerfiles qui ne fonctionnent pas (que j'ai donc enlevé)


RUN apt-get update &&\
	apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git &&\
	rm -rf /var/lib/apt/lists/*
RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.10.2.darwin-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
ENV PATH /usr/local/go/bin:$PATH
RUN go get github.com/mailhog/mhsendmail /usr/bin/mhsendmail
RUN echo 'sendmail_path = /usr/bin/mhsendmail --smtp-addr mailhog:1025' > /usr/local/etc/php/php.ini 