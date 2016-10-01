Presenter
=========

A simple implementation of the Presenter Pattern for PHP

## Features

* Simple `BasePresenter` implementation to create your own presenter classes
* Forward any unimplemented methods to the wrapped object
* Forward any unimplemented getters to the wrapped object
* A trait to make any model class implement `getPresenter`
* Trait uses auto-resolver for finding it's own presenter based on config, classname, or namespace convention

## Usage

Please refer to `examples/` for usage examples.

## License

MIT. Please refer to the [license file](LICENSE.md) for details.

## Brought to you by the LinkORB Engineering team

<img src="http://www.linkorb.com/d/meta/tier1/images/linkorbengineering-logo.png" width="200px" /><br />
Check out our other projects at [linkorb.com/engineering](http://www.linkorb.com/engineering).

Btw, we're hiring!
