FROM httpd:2.4.63

RUN apt-get update && \
    apt-get install -y micro && \
    apt-get install -y openssl && \
    echo "alias l='ls -CF'" >> /etc/bash.bashrc && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./conf/ /usr/local/apache2/conf/

WORKDIR /usr/local/apache2/