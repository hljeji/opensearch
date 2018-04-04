<?php
namespace OpenSearch\Generated\Document;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class Command {
  const ADD = 0;
  const DELETE = 1;
  const UPDATE = 2;
  static public $__names = array(
    0 => 'ADD',
    1 => 'DELETE',
    2 => 'UPDATE',
  );
}

final class Constant extends \Thrift\Type\TConstant {
  static protected $DOC_KEY_CMD;
  static protected $DOC_KEY_FIELDS;

  static protected function init_DOC_KEY_CMD() {
    return "cmd";
  }

  static protected function init_DOC_KEY_FIELDS() {
    return "fields";
  }
}


