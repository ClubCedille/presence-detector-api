FROM python:3.7.3

ENV FLASK_APP=presence_detector_server.py

RUN ["mkdir", "/app"]

COPY ./requirements.txt /app
COPY ./presence_detector_server.py /app

WORKDIR /app
RUN ["pip", "install", "-r", "requirements.txt"]

EXPOSE 5000

ENTRYPOINT ["flask", "run", "-h", "0.0.0.0"]
