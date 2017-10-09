'use strict';(function(f){"object"==typeof exports&&"object"==typeof module?f(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],f):f(CodeMirror)})(function(f){function g(a){for(var b={},c=0;c<a.length;c++)b[a[c]]=!0;return b}function h(a,b,c){a.sol()&&(b.indented=a.indentation());if(a.eatSpace())return null;var d=a.peek();if("/"==d){if(a.match("//"))return a.skipToEnd(),"comment";if(a.match("/*"))return b.tokenize.push(k),k(a,b)}if(a.match(l))return"builtin";
if(a.match(m))return"attribute";if(a.match(n)||a.match(p)||a.match(q)||a.match(r))return"number";if(a.match(t))return"property";if(-1<"+-/*%=|&<>~^?!".indexOf(d))return a.next(),"operator";if(-1<":;,.(){}[]".indexOf(d))return a.next(),a.match(".."),"punctuation";if('"'==d||"'"==d)return a.next(),c=u(d),b.tokenize.push(c),c(a,b);if(a.match(v))return a=a.current(),w.hasOwnProperty(a)?"variable-2":x.hasOwnProperty(a)?"atom":y.hasOwnProperty(a)?(z.hasOwnProperty(a)&&(b.prev="define"),"keyword"):"define"==
c?"def":"variable";a.next();return null}function A(){var a=0;return function(b,c,d){d=h(b,c,d);if("punctuation"==d)if("("==b.current())++a;else if(")"==b.current()){if(0==a)return b.backUp(1),c.tokenize.pop(),c.tokenize[c.tokenize.length-1](b,c);--a}return d}}function u(a){return function(b,c){for(var d,e=!1;d=b.next();)if(e){if("("==d)return c.tokenize.push(A()),"string";e=!1}else if(d==a)break;else e="\\"==d;c.tokenize.pop();return"string"}}function k(a,b){a.match(/^(?:[^*]|\*(?!\/))*/);a.match("*/")&&
b.tokenize.pop();return"comment"}function B(a,b,c){this.prev=a;this.align=b;this.indented=c}function C(a,b){b=b.match(/^\s*($|\/[\/\*])/,!1)?null:b.column()+1;a.context=new B(a.context,b,a.indented)}function D(a){a.context&&(a.indented=a.context.indented,a.context=a.context.prev)}var y=g("_ var let class enum extension import protocol struct func typealias associatedtype open public internal fileprivate private deinit init new override self subscript super convenience dynamic final indirect lazy required static unowned unowned(safe) unowned(unsafe) weak as is break case continue default else fallthrough for guard if in repeat switch where while defer return inout mutating nonmutating catch do rethrows throw throws try didSet get set willSet assignment associativity infix left none operator postfix precedence precedencegroup prefix right Any AnyObject Type dynamicType Self Protocol __COLUMN__ __FILE__ __FUNCTION__ __LINE__".split(" ")),
z=g("var let class enum extension import protocol struct func typealias associatedtype for".split(" ")),x=g("true false nil self super _".split(" ")),w=g("Array Bool Character Dictionary Double Float Int Int8 Int16 Int32 Int64 Never Optional Set String UInt8 UInt16 UInt32 UInt64 Void".split(" ")),n=/^\-?0b[01][01_]*/,p=/^\-?0o[0-7][0-7_]*/,q=/^\-?0x[\dA-Fa-f][\dA-Fa-f_]*(?:(?:\.[\dA-Fa-f][\dA-Fa-f_]*)?[Pp]\-?\d[\d_]*)?/,r=/^\-?\d[\d_]*(?:\.\d[\d_]*)?(?:[Ee]\-?\d[\d_]*)?/,v=/^\$\d+|(`?)[_A-Za-z][_A-Za-z$0-9]*\1/,
t=/^\.(?:\$\d+|(`?)[_A-Za-z][_A-Za-z$0-9]*\1)/,l=/^\#[A-Za-z]+/,m=/^@(?:\$\d+|(`?)[_A-Za-z][_A-Za-z$0-9]*\1)/;f.defineMode("swift",function(a){return{startState:function(){return{prev:null,context:null,indented:0,tokenize:[]}},token:function(a,c){var b=c.prev;c.prev=null;var e=(c.tokenize[c.tokenize.length-1]||h)(a,c,b);e&&"comment"!=e?c.prev||(c.prev=e):c.prev=b;"punctuation"==e&&(b=/[\(\[\{]|([\]\)\}])/.exec(a.current()))&&(b[1]?D:C)(c,a);return e},indent:function(b,c){b=b.context;if(!b)return 0;
c=/^[\]\}\)]/.test(c);return null!=b.align?b.align-(c?1:0):b.indented+(c?0:a.indentUnit)},electricInput:/^\s*[\)\}\]]$/,lineComment:"//",blockCommentStart:"/*",blockCommentEnd:"*/",fold:"brace",closeBrackets:"()[]{}''\"\"``"}});f.defineMIME("text/x-swift","swift")});