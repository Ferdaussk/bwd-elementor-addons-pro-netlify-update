<?php
namespace BWDElementorBundlePro\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class CodEntor_Code_Widgete extends Widget_Base {

	public function get_name(){
		return esc_html__('CodEntorSyntaxHighlighter', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_title(){
		return esc_html__( 'Code Highlighter', BWDEB_ROOT_AUTHOR_PRO );
	}

	public function get_icon(){
		return 'bwdeb-elementor-bundle eicon-code-highlight';
	}

	public function get_categories(){
		return [ 'bwdthebest_general_category' ];
	}

	public function get_style_depends(){
		return array('codentor-code-coy', 
			'codentor-code-dark', 
			'codentor-code-default', 
			'codentor-code-funky', 
			'codentor-code-okaidia', 
			'codentor-code-solarized-light', 
			'codentor-code-tomorrow-night', 
			'codentor-code-twilight',
			'codentor-cold-dark',
			'codentor-colddark-dark',
			'codentor-z-touch',
			'codentor-zonokai-theme',
			'codentor-vs-theme',
			'codentor-nord-theme',
			'codentor-holy-theme',
			'codentor-laserwave-theme',
			'codentor-lucario-theme',
			'codentor-night-owl',
			'codentor-atom-dark',
			'codentor-dracula-theme',
			'codentor-duotone-forest',
			'codentor-duotone-dark',
			'codentor-duotone-earth',
			'codentor-duotone-light',
			'codentor-duotone-sea',
			'codentor-duotone-space',
			'codentor-gruvbox-dark',
			'codentor-gruvbox-light',
			'codentor-ghcolors-theme',
			'codentor-a11y-dark-theme',
			'codentor-pojoaque',
			'codentor-shades-of-purple',
			'codentor-synthwave',
			'codentor-solarized-dark-atom',
			'codentor-material-dark',
			'codentor-material-light',
			'codentor-material-oceanic',
			'codentor-code-toolbar');
	}

	public function get_script_depends(){
		return array( 'codentor-code-prismjs', 'codentor-code-toolbarjs' );
	}

	protected function _register_controls(){

		$this->start_controls_section(
			'controls_section',
			[
				'label' => esc_html__( 'Code Syntex', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'codentor_theme',
			[
				'label' => esc_html__( 'Theme Style', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'Default' => esc_html__( 'Default', BWDEB_ROOT_AUTHOR_PRO ),
					'Dark' => esc_html__( 'Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'Okaidia' => esc_html__( 'Okaidia', BWDEB_ROOT_AUTHOR_PRO ),
					'Coy' => esc_html__( 'Coy', BWDEB_ROOT_AUTHOR_PRO ),
					'Tomorrow Night' => esc_html__( 'Night', BWDEB_ROOT_AUTHOR_PRO ),
					'Funky' => esc_html__( 'Funky', BWDEB_ROOT_AUTHOR_PRO ),
					'Twilight' => esc_html__( 'Twilight', BWDEB_ROOT_AUTHOR_PRO ),
					'Solarized Light' => esc_html__( 'Solarized Light', BWDEB_ROOT_AUTHOR_PRO ),
					'Cold Dark' => esc_html__( 'Colddark Cold', BWDEB_ROOT_AUTHOR_PRO ),
					'colddark-dark' => esc_html__( 'Colddark Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'z Touch' => esc_html__( 'Zeel Touch', BWDEB_ROOT_AUTHOR_PRO ),
					'Zonokai Theme' => esc_html__( 'Zonokai Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Vs Theme' => esc_html__( 'VS Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Nord Theme' => esc_html__( 'Nord Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Holy Theme' => esc_html__( 'Holy Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Laserwave Theme' => esc_html__( 'Laserwave Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Lucario Theme' => esc_html__( 'Lucario Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Night Owl' => esc_html__( 'Night Owl', BWDEB_ROOT_AUTHOR_PRO ),
					'Atom Dark' => esc_html__( 'Atom Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'Dracula Theme' => esc_html__( 'Dracula Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Forest' => esc_html__( 'Duotone Forest', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Dark' => esc_html__( 'Duotone Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Earth' => esc_html__( 'Duotone Earth', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Light' => esc_html__( 'Duotone Light', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Sea' => esc_html__( 'Duotone Sea', BWDEB_ROOT_AUTHOR_PRO ),
					'Duotone-Space' => esc_html__( 'Duotone Space', BWDEB_ROOT_AUTHOR_PRO ),
					'A11y-Dark-Theme' => esc_html__( 'A11y Dark Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'gruvbox-dark' => esc_html__( 'Gruvbox Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'gruvbox-light' => esc_html__( 'Gruvbox Light', BWDEB_ROOT_AUTHOR_PRO ),
					'ghcolors-theme' => esc_html__( 'Ghcolors Theme', BWDEB_ROOT_AUTHOR_PRO ),
					'pojoaque' => esc_html__( 'Pojoaque', BWDEB_ROOT_AUTHOR_PRO ),
					'shades-of-purple' => esc_html__( 'Shades Purple', BWDEB_ROOT_AUTHOR_PRO ),
					'synthwave' => esc_html__( 'Synthwave', BWDEB_ROOT_AUTHOR_PRO ),
					'solarized-dark-atom' => esc_html__( 'Solarized Dark Atom', BWDEB_ROOT_AUTHOR_PRO ),
					'material-dark' => esc_html__( 'Material Dark', BWDEB_ROOT_AUTHOR_PRO ),
					'material-light' => esc_html__( 'Material Light', BWDEB_ROOT_AUTHOR_PRO ),
					'material-oceanic' => esc_html__( 'Material Oceanic', BWDEB_ROOT_AUTHOR_PRO ),
				],
				'default' => 'Default'
			]
		);
		$this->add_control(
			'codentor_language',
			[
				'label' => esc_html__( 'Select Language', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'none' => esc_html__( 'None', BWDEB_ROOT_AUTHOR_PRO ),
					'abap' => esc_html__( 'abap', BWDEB_ROOT_AUTHOR_PRO ),
					'abnf' => esc_html__( 'abnf', BWDEB_ROOT_AUTHOR_PRO ),
					'actionscript' => esc_html__( 'actionscript', BWDEB_ROOT_AUTHOR_PRO ),
					'ada' => esc_html__( 'ada', BWDEB_ROOT_AUTHOR_PRO ),
					'adoc' => esc_html__( 'adoc', BWDEB_ROOT_AUTHOR_PRO ),
					'agda' => esc_html__( 'agda', BWDEB_ROOT_AUTHOR_PRO ),
					'al' => esc_html__( 'al', BWDEB_ROOT_AUTHOR_PRO ),
					'antlr4' => esc_html__( 'antlr4', BWDEB_ROOT_AUTHOR_PRO ),
					'apacheconf' => esc_html__( 'apacheconf', BWDEB_ROOT_AUTHOR_PRO ),
					'apex' => esc_html__( 'apex', BWDEB_ROOT_AUTHOR_PRO ),
					'apl' => esc_html__( 'apl', BWDEB_ROOT_AUTHOR_PRO ),
					'applescript' => esc_html__( 'applescript', BWDEB_ROOT_AUTHOR_PRO ),
					'aql' => esc_html__( 'aql', BWDEB_ROOT_AUTHOR_PRO ),
					'arduino' => esc_html__( 'arduino', BWDEB_ROOT_AUTHOR_PRO ),
					'arff' => esc_html__( 'arff', BWDEB_ROOT_AUTHOR_PRO ),
					'asciidoc' => esc_html__( 'asciidoc', BWDEB_ROOT_AUTHOR_PRO ),
					'asm6502' => esc_html__( 'asm6502', BWDEB_ROOT_AUTHOR_PRO ),
					'aspnet' => esc_html__( 'aspnet', BWDEB_ROOT_AUTHOR_PRO ),
					'atom' => esc_html__( 'atom', BWDEB_ROOT_AUTHOR_PRO ),
					'autohotkey' => esc_html__( 'autohotkey', BWDEB_ROOT_AUTHOR_PRO ),
					'autoit' => esc_html__( 'autoit', BWDEB_ROOT_AUTHOR_PRO ),
					'bash' => esc_html__( 'bash', BWDEB_ROOT_AUTHOR_PRO ),
					'basic' => esc_html__( 'basic', BWDEB_ROOT_AUTHOR_PRO ),
					'batch' => esc_html__( 'batch', BWDEB_ROOT_AUTHOR_PRO ),
					'bbcode' => esc_html__( 'bbcode', BWDEB_ROOT_AUTHOR_PRO ),
					'birb' => esc_html__( 'birb', BWDEB_ROOT_AUTHOR_PRO ),
					'bison' => esc_html__( 'bison', BWDEB_ROOT_AUTHOR_PRO ),
					'bnf' => esc_html__( 'bnf', BWDEB_ROOT_AUTHOR_PRO ),
					'brainfuck' => esc_html__( 'brainfuck', BWDEB_ROOT_AUTHOR_PRO ),
					'brightscript' => esc_html__( 'brightscript', BWDEB_ROOT_AUTHOR_PRO ),
					'bro' => esc_html__( 'bro', BWDEB_ROOT_AUTHOR_PRO ),
					'bsl' => esc_html__( 'bsl', BWDEB_ROOT_AUTHOR_PRO ),
					'c' => esc_html__( 'c', BWDEB_ROOT_AUTHOR_PRO ),
					'cil' => esc_html__( 'cil', BWDEB_ROOT_AUTHOR_PRO ),
					'clike' => esc_html__( 'clike', BWDEB_ROOT_AUTHOR_PRO ),
					'clojure' => esc_html__( 'clojure', BWDEB_ROOT_AUTHOR_PRO ),
					'cmake' => esc_html__( 'cmake', BWDEB_ROOT_AUTHOR_PRO ),
					'coffee' => esc_html__( 'coffee', BWDEB_ROOT_AUTHOR_PRO ),
					'coffeescript' => esc_html__( 'coffeescript', BWDEB_ROOT_AUTHOR_PRO ),
					'conc' => esc_html__( 'conc', BWDEB_ROOT_AUTHOR_PRO ),
					'concurnas' => esc_html__( 'concurnas', BWDEB_ROOT_AUTHOR_PRO ),
					'context' => esc_html__( 'context', BWDEB_ROOT_AUTHOR_PRO ),
					'cpp' => esc_html__( 'cpp', BWDEB_ROOT_AUTHOR_PRO ),
					'crystal' => esc_html__( 'crystal', BWDEB_ROOT_AUTHOR_PRO ),
					'cs' => esc_html__( 'cs', BWDEB_ROOT_AUTHOR_PRO ),
					'csharp' => esc_html__( 'csharp', BWDEB_ROOT_AUTHOR_PRO ),
					'csp' => esc_html__( 'csp', BWDEB_ROOT_AUTHOR_PRO ),
					'css' => esc_html__( 'css', BWDEB_ROOT_AUTHOR_PRO ),
					'cypher' => esc_html__( 'cypher', BWDEB_ROOT_AUTHOR_PRO ),
					'd' => esc_html__( 'd', BWDEB_ROOT_AUTHOR_PRO ),
					'dart' => esc_html__( 'dart', BWDEB_ROOT_AUTHOR_PRO ),
					'dataweave' => esc_html__( 'dataweave', BWDEB_ROOT_AUTHOR_PRO ),
					'dax' => esc_html__( 'dax', BWDEB_ROOT_AUTHOR_PRO ),
					'DFS' => esc_html__( 'DFS', BWDEB_ROOT_AUTHOR_PRO ),
					'dhall' => esc_html__( 'dhall', BWDEB_ROOT_AUTHOR_PRO ),
					'diff' => esc_html__( 'diff', BWDEB_ROOT_AUTHOR_PRO ),
					'django' => esc_html__( 'django', BWDEB_ROOT_AUTHOR_PRO ),
					'dns-zone' => esc_html__( 'dns-zone', BWDEB_ROOT_AUTHOR_PRO ),
					'dns-zone-file' => esc_html__( 'dns-zone-file', BWDEB_ROOT_AUTHOR_PRO ),
					'docker' => esc_html__( 'docker', BWDEB_ROOT_AUTHOR_PRO ),
					'dockerfile' => esc_html__( 'dockerfile', BWDEB_ROOT_AUTHOR_PRO ),
					'dotnet' => esc_html__( 'dotnet', BWDEB_ROOT_AUTHOR_PRO ),
					'ebnf' => esc_html__( 'ebnf', BWDEB_ROOT_AUTHOR_PRO ),
					'editorconfig' => esc_html__( 'editorconfig', BWDEB_ROOT_AUTHOR_PRO ),
					'eiffel' => esc_html__( 'eiffel', BWDEB_ROOT_AUTHOR_PRO ),
					'ejs' => esc_html__( 'ejs', BWDEB_ROOT_AUTHOR_PRO ),
					'elisp' => esc_html__( 'elisp', BWDEB_ROOT_AUTHOR_PRO ),
					'elixir' => esc_html__( 'elixir', BWDEB_ROOT_AUTHOR_PRO ),
					'elm' => esc_html__( 'elm', BWDEB_ROOT_AUTHOR_PRO ),
					'emacs' => esc_html__( 'emacs', BWDEB_ROOT_AUTHOR_PRO ),
					'emacs-lisp' => esc_html__( 'emacs-lisp', BWDEB_ROOT_AUTHOR_PRO ),
					'erb' => esc_html__( 'erb', BWDEB_ROOT_AUTHOR_PRO ),
					'erlang' => esc_html__( 'erlang', BWDEB_ROOT_AUTHOR_PRO ),
					'eta' => esc_html__( 'eta', BWDEB_ROOT_AUTHOR_PRO ),
					'etlua' => esc_html__( 'etlua', BWDEB_ROOT_AUTHOR_PRO ),
					'excel-formula' => esc_html__( 'excel-formula', BWDEB_ROOT_AUTHOR_PRO ),
					'extend' => esc_html__( 'extend', BWDEB_ROOT_AUTHOR_PRO ),
					'factor' => esc_html__( 'factor', BWDEB_ROOT_AUTHOR_PRO ),
					'firestore-security-rules' => esc_html__( 'firestore-security-rules', BWDEB_ROOT_AUTHOR_PRO ),
					'flow' => esc_html__( 'flow', BWDEB_ROOT_AUTHOR_PRO ),
					'fortran' => esc_html__( 'fortran', BWDEB_ROOT_AUTHOR_PRO ),
					'fsharp' => esc_html__( 'fsharp', BWDEB_ROOT_AUTHOR_PRO ),
					'ftl' => esc_html__( 'ftl', BWDEB_ROOT_AUTHOR_PRO ),
					'g4' => esc_html__( 'g4', BWDEB_ROOT_AUTHOR_PRO ),
					'gamemakerlanguage' => esc_html__( 'gamemakerlanguage', BWDEB_ROOT_AUTHOR_PRO ),
					'gcode' => esc_html__( 'gcode', BWDEB_ROOT_AUTHOR_PRO ),
					'gdscript' => esc_html__( 'gdscript', BWDEB_ROOT_AUTHOR_PRO ),
					'gedcom' => esc_html__( 'gedcom', BWDEB_ROOT_AUTHOR_PRO ),
					'gherkin' => esc_html__( 'gherkin', BWDEB_ROOT_AUTHOR_PRO ),
					'git' => esc_html__( 'git', BWDEB_ROOT_AUTHOR_PRO ),
					'gitignore' => esc_html__( 'gitignore', BWDEB_ROOT_AUTHOR_PRO ),
					'glsl' => esc_html__( 'glsl', BWDEB_ROOT_AUTHOR_PRO ),
					'gml' => esc_html__( 'gml', BWDEB_ROOT_AUTHOR_PRO ),
					'go' => esc_html__( 'go', BWDEB_ROOT_AUTHOR_PRO ),
					'graphql' => esc_html__( 'graphql', BWDEB_ROOT_AUTHOR_PRO ),
					'groovy' => esc_html__( 'groovy', BWDEB_ROOT_AUTHOR_PRO ),
					'haml' => esc_html__( 'haml', BWDEB_ROOT_AUTHOR_PRO ),
					'handlebars' => esc_html__( 'handlebars', BWDEB_ROOT_AUTHOR_PRO ),
					'haskell' => esc_html__( 'haskell', BWDEB_ROOT_AUTHOR_PRO ),
					'haxe' => esc_html__( 'haxe', BWDEB_ROOT_AUTHOR_PRO ),
					'hcl' => esc_html__( 'hcl', BWDEB_ROOT_AUTHOR_PRO ),
					'hgignore' => esc_html__( 'hgignore', BWDEB_ROOT_AUTHOR_PRO ),
					'hlsl' => esc_html__( 'hlsl', BWDEB_ROOT_AUTHOR_PRO ),
					'hpkp' => esc_html__( 'hpkp', BWDEB_ROOT_AUTHOR_PRO ),
					'hs' => esc_html__( 'hs', BWDEB_ROOT_AUTHOR_PRO ),
					'hsts' => esc_html__( 'hsts', BWDEB_ROOT_AUTHOR_PRO ),
					'html' => esc_html__( 'html', BWDEB_ROOT_AUTHOR_PRO ),
					'http' => esc_html__( 'http', BWDEB_ROOT_AUTHOR_PRO ),
					'ichigojam' => esc_html__( 'ichigojam', BWDEB_ROOT_AUTHOR_PRO ),
					'icon' => esc_html__( 'icon', BWDEB_ROOT_AUTHOR_PRO ),
					'iecst' => esc_html__( 'iecst', BWDEB_ROOT_AUTHOR_PRO ),
					'ignore' => esc_html__( 'ignore', BWDEB_ROOT_AUTHOR_PRO ),
					'inform7' => esc_html__( 'inform7', BWDEB_ROOT_AUTHOR_PRO ),
					'ini' => esc_html__( 'ini', BWDEB_ROOT_AUTHOR_PRO ),
					'insertBefore' => esc_html__( 'insertBefore', BWDEB_ROOT_AUTHOR_PRO ),
					'io' => esc_html__( 'io', BWDEB_ROOT_AUTHOR_PRO ),
					'j' => esc_html__( 'j', BWDEB_ROOT_AUTHOR_PRO ),
					'java' => esc_html__( 'java', BWDEB_ROOT_AUTHOR_PRO ),
					'javadoc' => esc_html__( 'javadoc', BWDEB_ROOT_AUTHOR_PRO ),
					'javadoclike' => esc_html__( 'javadoclike', BWDEB_ROOT_AUTHOR_PRO ),
					'javascript' => esc_html__( 'javascript', BWDEB_ROOT_AUTHOR_PRO ),
					'javastacktrace' => esc_html__( 'javastacktrace', BWDEB_ROOT_AUTHOR_PRO ),
					'jinja2' => esc_html__( 'jinja2', BWDEB_ROOT_AUTHOR_PRO ),
					'jolie' => esc_html__( 'jolie', BWDEB_ROOT_AUTHOR_PRO ),
					'jq' => esc_html__( 'jq', BWDEB_ROOT_AUTHOR_PRO ),
					'js' => esc_html__( 'js', BWDEB_ROOT_AUTHOR_PRO ),
					'jsdoc' => esc_html__( 'jsdoc', BWDEB_ROOT_AUTHOR_PRO ),
					'json' => esc_html__( 'json', BWDEB_ROOT_AUTHOR_PRO ),
					'json5' => esc_html__( 'json5', BWDEB_ROOT_AUTHOR_PRO ),
					'jsonp' => esc_html__( 'jsonp', BWDEB_ROOT_AUTHOR_PRO ),
					'jsstacktrace' => esc_html__( 'jsstacktrace', BWDEB_ROOT_AUTHOR_PRO ),
					'jsx' => esc_html__( 'jsx', BWDEB_ROOT_AUTHOR_PRO ),
					'julia' => esc_html__( 'julia', BWDEB_ROOT_AUTHOR_PRO ),
					'keyman' => esc_html__( 'keyman', BWDEB_ROOT_AUTHOR_PRO ),
					'kotlin' => esc_html__( 'kotlin', BWDEB_ROOT_AUTHOR_PRO ),
					'kt' => esc_html__( 'kt', BWDEB_ROOT_AUTHOR_PRO ),
					'kts' => esc_html__( 'kts', BWDEB_ROOT_AUTHOR_PRO ),
					'latex' => esc_html__( 'latex', BWDEB_ROOT_AUTHOR_PRO ),
					'latte' => esc_html__( 'latte', BWDEB_ROOT_AUTHOR_PRO ),
					'less' => esc_html__( 'less', BWDEB_ROOT_AUTHOR_PRO ),
					'lilypond' => esc_html__( 'lilypond', BWDEB_ROOT_AUTHOR_PRO ),
					'liquid' => esc_html__( 'liquid', BWDEB_ROOT_AUTHOR_PRO ),
					'lisp' => esc_html__( 'lisp', BWDEB_ROOT_AUTHOR_PRO ),
					'livescript' => esc_html__( 'livescript', BWDEB_ROOT_AUTHOR_PRO ),
					'llvm' => esc_html__( 'llvm', BWDEB_ROOT_AUTHOR_PRO ),
					'lolcode' => esc_html__( 'lolcode', BWDEB_ROOT_AUTHOR_PRO ),
					'lua' => esc_html__( 'lua', BWDEB_ROOT_AUTHOR_PRO ),
					'ly' => esc_html__( 'ly', BWDEB_ROOT_AUTHOR_PRO ),
					'makefile' => esc_html__( 'makefile', BWDEB_ROOT_AUTHOR_PRO ),
					'markdown' => esc_html__( 'markdown', BWDEB_ROOT_AUTHOR_PRO ),
					'markup' => esc_html__( 'markup', BWDEB_ROOT_AUTHOR_PRO ),
					'markup-templating' => esc_html__( 'markup-templating', BWDEB_ROOT_AUTHOR_PRO ),
					'mathml' => esc_html__( 'mathml', BWDEB_ROOT_AUTHOR_PRO ),
					'matlab' => esc_html__( 'matlab', BWDEB_ROOT_AUTHOR_PRO ),
					'md' => esc_html__( 'md', BWDEB_ROOT_AUTHOR_PRO ),
					'mel' => esc_html__( 'mel', BWDEB_ROOT_AUTHOR_PRO ),
					'mizar' => esc_html__( 'mizar', BWDEB_ROOT_AUTHOR_PRO ),
					'mongodb' => esc_html__( 'mongodb', BWDEB_ROOT_AUTHOR_PRO ),
					'monkey' => esc_html__( 'monkey', BWDEB_ROOT_AUTHOR_PRO ),
					'moon' => esc_html__( 'moon', BWDEB_ROOT_AUTHOR_PRO ),
					'moonscript' => esc_html__( 'moonscript', BWDEB_ROOT_AUTHOR_PRO ),
					'mscript' => esc_html__( 'mscript', BWDEB_ROOT_AUTHOR_PRO ),
					'n1ql' => esc_html__( 'n1ql', BWDEB_ROOT_AUTHOR_PRO ),
					'n4js' => esc_html__( 'n4js', BWDEB_ROOT_AUTHOR_PRO ),
					'n4jsd' => esc_html__( 'n4jsd', BWDEB_ROOT_AUTHOR_PRO ),
					'nand2tetris-hdl' => esc_html__( 'nand2tetris-hdl', BWDEB_ROOT_AUTHOR_PRO ),
					'nani' => esc_html__( 'nani', BWDEB_ROOT_AUTHOR_PRO ),
					'naniscript' => esc_html__( 'naniscript', BWDEB_ROOT_AUTHOR_PRO ),
					'nasm' => esc_html__( 'nasm', BWDEB_ROOT_AUTHOR_PRO ),
					'neon' => esc_html__( 'neon', BWDEB_ROOT_AUTHOR_PRO ),
					'nginx' => esc_html__( 'nginx', BWDEB_ROOT_AUTHOR_PRO ),
					'nim' => esc_html__( 'nim', BWDEB_ROOT_AUTHOR_PRO ),
					'nix' => esc_html__( 'nix', BWDEB_ROOT_AUTHOR_PRO ),
					'npmignore' => esc_html__( 'npmignore', BWDEB_ROOT_AUTHOR_PRO ),
					'nsis' => esc_html__( 'nsis', BWDEB_ROOT_AUTHOR_PRO ),
					'objc' => esc_html__( 'objc', BWDEB_ROOT_AUTHOR_PRO ),
					'objectivec' => esc_html__( 'objectivec', BWDEB_ROOT_AUTHOR_PRO ),
					'objectpascal' => esc_html__( 'objectpascal', BWDEB_ROOT_AUTHOR_PRO ),
					'ocaml' => esc_html__( 'ocaml', BWDEB_ROOT_AUTHOR_PRO ),
					'opencl' => esc_html__( 'opencl', BWDEB_ROOT_AUTHOR_PRO ),
					'oscript' => esc_html__( 'oscript', BWDEB_ROOT_AUTHOR_PRO ),
					'oz' => esc_html__( 'oz', BWDEB_ROOT_AUTHOR_PRO ),
					'parigp' => esc_html__( 'parigp', BWDEB_ROOT_AUTHOR_PRO ),
					'parser' => esc_html__( 'parser', BWDEB_ROOT_AUTHOR_PRO ),
					'pascal' => esc_html__( 'pascal', BWDEB_ROOT_AUTHOR_PRO ),
					'pascaligo' => esc_html__( 'pascaligo', BWDEB_ROOT_AUTHOR_PRO ),
					'pbfasm' => esc_html__( 'pbfasm', BWDEB_ROOT_AUTHOR_PRO ),
					'pcaxis' => esc_html__( 'pcaxis', BWDEB_ROOT_AUTHOR_PRO ),
					'pcode' => esc_html__( 'pcode', BWDEB_ROOT_AUTHOR_PRO ),
					'peoplecode' => esc_html__( 'peoplecode', BWDEB_ROOT_AUTHOR_PRO ),
					'perl' => esc_html__( 'perl', BWDEB_ROOT_AUTHOR_PRO ),
					'php' => esc_html__( 'php', BWDEB_ROOT_AUTHOR_PRO ),
					'phpdoc' => esc_html__( 'phpdoc', BWDEB_ROOT_AUTHOR_PRO ),
					'plsql' => esc_html__( 'plsql', BWDEB_ROOT_AUTHOR_PRO ),
					'powerquery' => esc_html__( 'powerquery', BWDEB_ROOT_AUTHOR_PRO ),
					'powershell' => esc_html__( 'powershell', BWDEB_ROOT_AUTHOR_PRO ),
					'pq' => esc_html__( 'pq', BWDEB_ROOT_AUTHOR_PRO ),
					'processing' => esc_html__( 'processing', BWDEB_ROOT_AUTHOR_PRO ),
					'prolog' => esc_html__( 'prolog', BWDEB_ROOT_AUTHOR_PRO ),
					'promql' => esc_html__( 'promql', BWDEB_ROOT_AUTHOR_PRO ),
					'properties' => esc_html__( 'properties', BWDEB_ROOT_AUTHOR_PRO ),
					'protobuf' => esc_html__( 'protobuf', BWDEB_ROOT_AUTHOR_PRO ),
					'pug' => esc_html__( 'pug', BWDEB_ROOT_AUTHOR_PRO ),
					'puppet' => esc_html__( 'puppet', BWDEB_ROOT_AUTHOR_PRO ),
					'pure' => esc_html__( 'pure', BWDEB_ROOT_AUTHOR_PRO ),
					'purebasic' => esc_html__( 'purebasic', BWDEB_ROOT_AUTHOR_PRO ),
					'purescript' => esc_html__( 'purescript', BWDEB_ROOT_AUTHOR_PRO ),
					'purs' => esc_html__( 'purs', BWDEB_ROOT_AUTHOR_PRO ),
					'px' => esc_html__( 'px', BWDEB_ROOT_AUTHOR_PRO ),
					'py' => esc_html__( 'py', BWDEB_ROOT_AUTHOR_PRO ),
					'python' => esc_html__( 'python', BWDEB_ROOT_AUTHOR_PRO ),
					'q' => esc_html__( 'q', BWDEB_ROOT_AUTHOR_PRO ),
					'qml' => esc_html__( 'qml', BWDEB_ROOT_AUTHOR_PRO ),
					'qore' => esc_html__( 'qore', BWDEB_ROOT_AUTHOR_PRO ),
					'r' => esc_html__( 'r', BWDEB_ROOT_AUTHOR_PRO ),
					'racket' => esc_html__( 'racket', BWDEB_ROOT_AUTHOR_PRO ),
					'rb' => esc_html__( 'rb', BWDEB_ROOT_AUTHOR_PRO ),
					'rbnf' => esc_html__( 'rbnf', BWDEB_ROOT_AUTHOR_PRO ),
					'reason' => esc_html__( 'reason', BWDEB_ROOT_AUTHOR_PRO ),
					'regex' => esc_html__( 'regex', BWDEB_ROOT_AUTHOR_PRO ),
					'renpy' => esc_html__( 'renpy', BWDEB_ROOT_AUTHOR_PRO ),
					'rest' => esc_html__( 'rest', BWDEB_ROOT_AUTHOR_PRO ),
					'rip' => esc_html__( 'rip', BWDEB_ROOT_AUTHOR_PRO ),
					'rkt' => esc_html__( 'rkt', BWDEB_ROOT_AUTHOR_PRO ),
					'roboconf' => esc_html__( 'roboconf', BWDEB_ROOT_AUTHOR_PRO ),
					'robot' => esc_html__( 'robot', BWDEB_ROOT_AUTHOR_PRO ),
					'robotframework' => esc_html__( 'robotframework', BWDEB_ROOT_AUTHOR_PRO ),
					'rpy' => esc_html__( 'rpy', BWDEB_ROOT_AUTHOR_PRO ),
					'rq' => esc_html__( 'rq', BWDEB_ROOT_AUTHOR_PRO ),
					'rss' => esc_html__( 'rss', BWDEB_ROOT_AUTHOR_PRO ),
					'ruby' => esc_html__( 'ruby', BWDEB_ROOT_AUTHOR_PRO ),
					'rust' => esc_html__( 'rust', BWDEB_ROOT_AUTHOR_PRO ),
					'sas' => esc_html__( 'sas', BWDEB_ROOT_AUTHOR_PRO ),
					'sass' => esc_html__( 'sass', BWDEB_ROOT_AUTHOR_PRO ),
					'scala' => esc_html__( 'scala', BWDEB_ROOT_AUTHOR_PRO ),
					'scheme' => esc_html__( 'scheme', BWDEB_ROOT_AUTHOR_PRO ),
					'scss' => esc_html__( 'scss', BWDEB_ROOT_AUTHOR_PRO ),
					'sh-session' => esc_html__( 'sh-session', BWDEB_ROOT_AUTHOR_PRO ),
					'shell' => esc_html__( 'shell', BWDEB_ROOT_AUTHOR_PRO ),
					'shell-session' => esc_html__( 'shell-session', BWDEB_ROOT_AUTHOR_PRO ),
					'shellsession' => esc_html__( 'shellsession', BWDEB_ROOT_AUTHOR_PRO ),
					'shortcode' => esc_html__( 'shortcode', BWDEB_ROOT_AUTHOR_PRO ),
					'sln' => esc_html__( 'sln', BWDEB_ROOT_AUTHOR_PRO ),
					'smali' => esc_html__( 'smali', BWDEB_ROOT_AUTHOR_PRO ),
					'smalltalk' => esc_html__( 'smalltalk', BWDEB_ROOT_AUTHOR_PRO ),
					'smarty' => esc_html__( 'smarty', BWDEB_ROOT_AUTHOR_PRO ),
					'sml' => esc_html__( 'sml', BWDEB_ROOT_AUTHOR_PRO ),
					'smlnj' => esc_html__( 'smlnj', BWDEB_ROOT_AUTHOR_PRO ),
					'sol' => esc_html__( 'sol', BWDEB_ROOT_AUTHOR_PRO ),
					'solidity' => esc_html__( 'solidity', BWDEB_ROOT_AUTHOR_PRO ),
					'solution-file' => esc_html__( 'solution-file', BWDEB_ROOT_AUTHOR_PRO ),
					'soy' => esc_html__( 'soy', BWDEB_ROOT_AUTHOR_PRO ),
					'sparql' => esc_html__( 'sparql', BWDEB_ROOT_AUTHOR_PRO ),
					'splunk-spl' => esc_html__( 'splunk-spl', BWDEB_ROOT_AUTHOR_PRO ),
					'sqf' => esc_html__( 'sqf', BWDEB_ROOT_AUTHOR_PRO ),
					'sql' => esc_html__( 'sql', BWDEB_ROOT_AUTHOR_PRO ),
					'ssml' => esc_html__( 'ssml', BWDEB_ROOT_AUTHOR_PRO ),
					'stan' => esc_html__( 'stan', BWDEB_ROOT_AUTHOR_PRO ),
					'stylus' => esc_html__( 'stylus', BWDEB_ROOT_AUTHOR_PRO ),
					'svg' => esc_html__( 'svg', BWDEB_ROOT_AUTHOR_PRO ),
					'swift' => esc_html__( 'swift', BWDEB_ROOT_AUTHOR_PRO ),
					't4' => esc_html__( 't4', BWDEB_ROOT_AUTHOR_PRO ),
					't4-cs' => esc_html__( 't4-cs', BWDEB_ROOT_AUTHOR_PRO ),
					't4-templating' => esc_html__( 't4-templating', BWDEB_ROOT_AUTHOR_PRO ),
					't4-vb' => esc_html__( 't4-vb', BWDEB_ROOT_AUTHOR_PRO ),
					'tap' => esc_html__( 'tap', BWDEB_ROOT_AUTHOR_PRO ),
					'tcl' => esc_html__( 'tcl', BWDEB_ROOT_AUTHOR_PRO ),
					'tex' => esc_html__( 'tex', BWDEB_ROOT_AUTHOR_PRO ),
					'textile' => esc_html__( 'textile', BWDEB_ROOT_AUTHOR_PRO ),
					'toml' => esc_html__( 'toml', BWDEB_ROOT_AUTHOR_PRO ),
					'trig' => esc_html__( 'trig', BWDEB_ROOT_AUTHOR_PRO ),
					'ts' => esc_html__( 'ts', BWDEB_ROOT_AUTHOR_PRO ),
					'tsconfig' => esc_html__( 'tsconfig', BWDEB_ROOT_AUTHOR_PRO ),
					'tsx' => esc_html__( 'tsx', BWDEB_ROOT_AUTHOR_PRO ),
					'tt2' => esc_html__( 'tt2', BWDEB_ROOT_AUTHOR_PRO ),
					'turtle' => esc_html__( 'turtle', BWDEB_ROOT_AUTHOR_PRO ),
					'twig' => esc_html__( 'twig', BWDEB_ROOT_AUTHOR_PRO ),
					'typescript' => esc_html__( 'typescript', BWDEB_ROOT_AUTHOR_PRO ),
					'typoscript' => esc_html__( 'typoscript', BWDEB_ROOT_AUTHOR_PRO ),
					'uc' => esc_html__( 'uc', BWDEB_ROOT_AUTHOR_PRO ),
					'unrealscript' => esc_html__( 'unrealscript', BWDEB_ROOT_AUTHOR_PRO ),
					'uscript' => esc_html__( 'uscript', BWDEB_ROOT_AUTHOR_PRO ),
					'vala' => esc_html__( 'vala', BWDEB_ROOT_AUTHOR_PRO ),
					'vb' => esc_html__( 'vb', BWDEB_ROOT_AUTHOR_PRO ),
					'vba' => esc_html__( 'vba', BWDEB_ROOT_AUTHOR_PRO ),
					'vbnet' => esc_html__( 'vbnet', BWDEB_ROOT_AUTHOR_PRO ),
					'velocity' => esc_html__( 'velocity', BWDEB_ROOT_AUTHOR_PRO ),
					'verilog' => esc_html__( 'verilog', BWDEB_ROOT_AUTHOR_PRO ),
					'vhdl' => esc_html__( 'vhdl', BWDEB_ROOT_AUTHOR_PRO ),
					'vim' => esc_html__( 'vim', BWDEB_ROOT_AUTHOR_PRO ),
					'visual-basic' => esc_html__( 'visual-basic', BWDEB_ROOT_AUTHOR_PRO ),
					'warpscript' => esc_html__( 'warpscript', BWDEB_ROOT_AUTHOR_PRO ),
					'wasm' => esc_html__( 'wasm', BWDEB_ROOT_AUTHOR_PRO ),
					'webmanifest' => esc_html__( 'webmanifest', BWDEB_ROOT_AUTHOR_PRO ),
					'wiki' => esc_html__( 'wiki', BWDEB_ROOT_AUTHOR_PRO ),
					'xeora' => esc_html__( 'xeora', BWDEB_ROOT_AUTHOR_PRO ),
					'xeoracube' => esc_html__( 'xeoracube', BWDEB_ROOT_AUTHOR_PRO ),
					'xls' => esc_html__( 'xls', BWDEB_ROOT_AUTHOR_PRO ),
					'xlsx' => esc_html__( 'xlsx', BWDEB_ROOT_AUTHOR_PRO ),
					'xml' => esc_html__( 'xml', BWDEB_ROOT_AUTHOR_PRO ),
					'xojo' => esc_html__( 'xojo', BWDEB_ROOT_AUTHOR_PRO ),
					'xquery' => esc_html__( 'xquery', BWDEB_ROOT_AUTHOR_PRO ),
					'yaml' => esc_html__( 'yaml', BWDEB_ROOT_AUTHOR_PRO ),
					'yang' => esc_html__( 'yang', BWDEB_ROOT_AUTHOR_PRO ),
					'yml' => esc_html__( 'yml', BWDEB_ROOT_AUTHOR_PRO ),
					'zig' => esc_html__( 'zig', BWDEB_ROOT_AUTHOR_PRO )
				],
				'default' => 'html'
			]
		);
		$this->add_control(
			'codentor_show_language',
			[
				'label' => esc_html__( 'Display Language', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => esc_html__( 'yes' ),
			]
		);
		$this->add_control(
			'codentor_show_line_numbers',
			[
				'label' => esc_html__( 'Line Numbers', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => esc_html__( 'yes' ),
			]
		);
		$this->add_control(
			'codentor_show_toolbar',
			[
				'label' => esc_html__( 'Copy to Clipboard', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', BWDEB_ROOT_AUTHOR_PRO ),
				'label_off' => esc_html__( 'Hide', BWDEB_ROOT_AUTHOR_PRO ),
				'default' => __( 'yes' ),
			]
		);
		$this->add_responsive_control(
			'codentor_font_size',
			[
				'label' => esc_html__( 'Font Size', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap code.language-html' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_height',
			[
				'label' => esc_html__( 'Height', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} pre.codentor_wrap.line-numbers.theme-default.language-html' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'codentor_content',
			[
				'label' => esc_html__( 'Code', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::CODE,
				'language' => 'text',
				'default' => '<h1>This is my language.</h1>',
				'rows' => 10,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_catpost_content_style',
			[
				'label' => esc_html__( 'Code Syntex Style', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'codentor_punctuation_color',
			[
				'label' => esc_html__( 'Punctuation Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.punctuation' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_comment_color',
			[
				'label' => esc_html__( 'Comment Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.comment' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_property_color',
			[
				'label' => esc_html__( 'Property Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.property' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_selector_color',
			[
				'label' => esc_html__( 'Selector Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.selector' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_operator_color',
			[
				'label' => esc_html__( 'Operator Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.operator' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_operator_bg_color',
			[
				'label' => esc_html__( 'Operator Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.operator' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_keyword_color',
			[
				'label' => esc_html__( 'Keyword Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.keyword' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_function_color',
			[
				'label' => esc_html__( 'Function Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.function' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_variable_color',
			[
				'label' => esc_html__( 'Variable Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.variable' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_catpost_title_style',
			[
				'label' => esc_html__( 'Line Numbers', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_line_numbers' => 'yes'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_title_typography',
				'selector' => '{{WRAPPER}} .line-numbers-rows span:before',
			]
		);
		$this->add_control(
			'codentor_title_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'codentor_title_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_border_right',
				'label' => esc_html__( 'Right Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .line-numbers-rows',
			]
		);
		$this->add_responsive_control(
			'codentor_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_title_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_title_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'codentor_catpost_description_style',
			[
				'label' => esc_html__( 'Copy Clipboard', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_toolbar' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'codentor_description_style_post'
		);
		$this->start_controls_tab(
			'codentor_description_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_description_typography',
				'selector' => '{{WRAPPER}} .codentor_toolbar .toolbar-item button',
			]
		);
		$this->add_control(
			'codentor_description_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_description_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_description_hover_typography',
				'selector' => '{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover',
			]
		);
		$this->add_control(
			'codentor_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_copy_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .code-toolbar .codentor_toolbar .toolbar-item button',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'codentor_desc_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_desc_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_desc_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_language_btn_style',
			[
				'label' => esc_html__( 'Language Button', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_language' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'codentor_language_style'
		);
		$this->start_controls_tab(
			'codentor_language_btn_normal',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_language_btn_typography',
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type',
			]
		);
		$this->add_control(
			'codentor_language_btn_color',
			[
				'label' => esc_html__( 'Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_language_btn_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_language_btn_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_language_btn_hover_typography',
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type:hover',
			]
		);
		$this->add_control(
			'codentor_language_btn_hover_color',
			[
				'label' => esc_html__( 'Hover Color', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_language_btn_hover_bg_color',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_language_btn_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_margin',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'codentor_content_style',
			[
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'codentor_box_style_post'
		);
		$this->start_controls_tab(
			'codentor_box_normal_post',
			[
				'label' => esc_html__( 'Normal', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'codentor_box_bg_grediant_color',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'codentor_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_box_border',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', BWDEB_ROOT_AUTHOR_PRO ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'codentor_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', BWDEB_ROOT_AUTHOR_PRO ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'codentor_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_box_border_hover',
				'label' => esc_html__( 'Border', BWDEB_ROOT_AUTHOR_PRO ),
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
			'codentor_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_box_padding',
			[
				'label' => esc_html__('Padding', BWDEB_ROOT_AUTHOR_PRO),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$display_all  = $this->get_settings_for_display();
		$codentor_language = $display_all ['codentor_language'];
		$codentor_theme = $display_all ['codentor_theme'];
		$codentor_show_line_numbers = $display_all ['codentor_show_line_numbers'];
		$codentor_show_toolbar = $display_all ['codentor_show_toolbar'];
		$codentor_content = htmlentities($display_all ['codentor_content']);
		$codentor_pre_classes = '';

		if('yes' === $codentor_show_line_numbers){
			$codentor_pre_classes .= "line-numbers ";
		}
		if('yes' !== $codentor_show_toolbar){
			$codentor_show_toolbar = "no";
		}
		$codentor_pre_classes .= "theme-" . preg_replace('/\s+/', '-', strtolower($codentor_theme));
		$codentor_language_check = $display_all['codentor_show_language']?'<div class="codentor_language_type">'.$codentor_language.'</div>':'';
		echo "<pre class='codentor_wrap $codentor_pre_classes' data-show-toolbar='$codentor_show_toolbar'>$codentor_language_check<code class='language-$codentor_language'>$codentor_content</code></pre>";	
		if( Plugin::instance()->editor->is_edit_mode()){
			$this->render_editor_script();
		}
	}

	protected function render_editor_script(){
		?><script type="text/javascript">
		jQuery( document ).ready(function(){
			window.Prism.highlightAll();
			jQuery('pre[data-show-toolbar="no"]').siblings('div.codentor_toolbar').hide();
		});
		</script>
		<?php
	}
}