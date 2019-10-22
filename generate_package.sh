#!/bin/bash
sudo docker run --rm -v ${PWD}/../:/local swaggerapi/swagger-codegen-cli generate \
	-i https://api.easybill.de/rest/v1/swagger.json \
	-l php \
	-o /local/ \
	--git-user-id cbeyersdorf \
	--git-repo-id easybill \
	--invoker-package cbeyersdorf\\easybill \
	-D packagePath=easybill,phpLegacySupport=false
