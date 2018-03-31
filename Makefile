update: ## Update from upstream and create a new release
update:
	git fetch --all -p
	git merge upstream/master --no-ff -q -m "Merge remote-tracking branch 'upstream/master'"
	./RMT release --type=patch --auto-publish=y

.DEFAULT_GOAL := help
help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help
