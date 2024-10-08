#!/bin/bash
# NEW PHP 7.4 build with openapitools/openapi-generator-cli (needs the fix_null_problem.sh after generation)
docker run --user ${UID} --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate \
	-i https://api.easybill.de/rest/v1/swagger.json \
	-g php \
	-o /local \
	--git-user-id cbeyersdorf \
	--git-repo-id easybill \
	--invoker-package "cbeyersdorf\easybill" \
	"--additional-properties=packageName=easybill,developerOrganization=IANT GmbH,developerOrganizationUrl=https://www.iant.de"

# OLD PHP 5 build with swaggerapi/swagger-codegen-cli-v3 (needs the fix_null_problem.sh after generation)
#docker run --rm -v ${PWD}:/local swaggerapi/swagger-codegen-cli-v3 generate \
#	-i https://api.easybill.de/rest/v1/swagger.json \
#	-l php \
#	-o /local/ \
#	--git-user-id cbeyersdorf \
#	--git-repo-id easybill \
#	--invoker-package "cbeyersdorf\easybill" \
#	-D packagePath=.
