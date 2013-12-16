# Work.com
Small [middleman](http://middlemanapp.com/) site for http://brentscheibelhut.com

## Development
If you're implementing a feature, please implement your feature on a separate
branch then open a pull request on GitHub. The master branch should always
be production ready code.

```bash
$ git clone https://github.com/bscheibe/sdotcom
$ cd sdotcom
$ bundle install
$ bundle exec middleman s
```

Point your browser to <http://localhost:4567>

### Folder Structure

* `source`: Pretty much 99% of your changes will be in this directory. It
  contains all the haml, scss and javascript.
* `data`: Yaml formatted data for meta data

## Deploying
You can deploy to production by running

```bash
$ git checkout master
$ rake production heroku:push
```

### Staging Environments

There are one staging app; `staging`. You can deploy code to it's
environment for QA purposes by running:

```bash
$ git checkout my-feature-branch
$ rake staging heroku:push:force
```

## Tests
Run the specs with:

```bash
$ rake spec
```
