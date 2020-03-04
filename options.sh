#!/bin/bash
sudo docker run --rm -v ${PWD}/../:/local swaggerapi/swagger-codegen-cli help generate #
exit
\
	-l php \
	-o /local/ \
	-i https://api.easybill.de/rest/v1/swagger.json \
	--git-user-id cbeyersdorf \
	--git-repo-id easybill \
	--invoker-package cbeyersdorf\\easybill \
	-D packagePath=easybill,phpLegacySupport=false
