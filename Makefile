PHP-TOOLS-IMAGE=daniloterra/php-tools:ubuntu

composer-init:
	docker run --rm -it --volume $PWD:/app ${PHP-TOOLS-IMAGE} composer init

cpd:

