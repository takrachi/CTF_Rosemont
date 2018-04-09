FROM ubuntu:latest

RUN apt-get update -y 
RUN apt-get install -y python2.7 python-pip

RUN useradd -m gpd
COPY web /home/gpd/src
WORKDIR /home/gpd/src

RUN pip install -r requirements.txt
RUN rm /home/gpd/src/requirements.txt

CMD su -l gpd bash -c 'python2 /home/gpd/src/app.py VnfTjsPslvfi3sA3a300dXodlakvmbt'
