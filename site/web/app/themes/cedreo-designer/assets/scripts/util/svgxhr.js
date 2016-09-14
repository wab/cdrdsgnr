/* eslint-disable */
/**
 * Load svg via ajax
 * base on https://github.com/mrsum/webpack-svgstore-plugin svgXHR
 */
const path = require('path');
const rootPath = '/app/themes/sage';

export default class svgxhr {
  constructor(options) {
    this.options = options;
    this.pathsvg = path.join(rootPath, 'dist/');
  }
  loadsvg() {
    var url = false;
    var baseUrl = undefined;
    var pathsvg = undefined;

    this.options && this.options.filename
      ? url = this.options.filename
      : null;

    this.pathsvg
      ? pathsvg = this.pathsvg
      : null;

    if (!url) return false;
    var _ajax = new XMLHttpRequest();
    var _fullPath;

    if (typeof XDomainRequest !== 'undefined') {
      _ajax = new XDomainRequest();
    }

    if (typeof baseUrl === 'undefined') {
      if (typeof window.baseUrl !== 'undefined') {
        baseUrl = window.baseUrl;
      } else {
        baseUrl = window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
      }
    }

    _fullPath = (baseUrl + pathsvg + url).replace(/([^:]\/)\/+/g, '$1');
    _ajax.open('GET', _fullPath, true);
    _ajax.onprogress = function() {};
    _ajax.onload = function() {
      var div = document.createElement('div');
      div.innerHTML = _ajax.responseText;
      document.body.insertBefore(div, document.body.childNodes[0]);
    };
    _ajax.send();
  }
}
