<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_562921be9cfec8dd9e7621e14f494d697765dfe7af2d6b126558efefb5909edd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb93e1975c07a2b8f07ed1e510a5772d9737d91e5bca2d4a909f495b6394ae02 = $this->env->getExtension("native_profiler");
        $__internal_cb93e1975c07a2b8f07ed1e510a5772d9737d91e5bca2d4a909f495b6394ae02->enter($__internal_cb93e1975c07a2b8f07ed1e510a5772d9737d91e5bca2d4a909f495b6394ae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb93e1975c07a2b8f07ed1e510a5772d9737d91e5bca2d4a909f495b6394ae02->leave($__internal_cb93e1975c07a2b8f07ed1e510a5772d9737d91e5bca2d4a909f495b6394ae02_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_f3d1466fcf8e02ad507acdfab1032fbbcb04b9afd8dec501d9e5a48ba96607dc = $this->env->getExtension("native_profiler");
        $__internal_f3d1466fcf8e02ad507acdfab1032fbbcb04b9afd8dec501d9e5a48ba96607dc->enter($__internal_f3d1466fcf8e02ad507acdfab1032fbbcb04b9afd8dec501d9e5a48ba96607dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_f3d1466fcf8e02ad507acdfab1032fbbcb04b9afd8dec501d9e5a48ba96607dc->leave($__internal_f3d1466fcf8e02ad507acdfab1032fbbcb04b9afd8dec501d9e5a48ba96607dc_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_ccf391f95264987bba25c5217313d0dcba230c1d7b7b7977381c6e6ae9fe64cf = $this->env->getExtension("native_profiler");
        $__internal_ccf391f95264987bba25c5217313d0dcba230c1d7b7b7977381c6e6ae9fe64cf->enter($__internal_ccf391f95264987bba25c5217313d0dcba230c1d7b7b7977381c6e6ae9fe64cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_ccf391f95264987bba25c5217313d0dcba230c1d7b7b7977381c6e6ae9fe64cf->leave($__internal_ccf391f95264987bba25c5217313d0dcba230c1d7b7b7977381c6e6ae9fe64cf_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_f46d287a14bc1afac0ab194813ee82be793285220ec0a8aef7811a964358dfe2 = $this->env->getExtension("native_profiler");
        $__internal_f46d287a14bc1afac0ab194813ee82be793285220ec0a8aef7811a964358dfe2->enter($__internal_f46d287a14bc1afac0ab194813ee82be793285220ec0a8aef7811a964358dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_f46d287a14bc1afac0ab194813ee82be793285220ec0a8aef7811a964358dfe2->leave($__internal_f46d287a14bc1afac0ab194813ee82be793285220ec0a8aef7811a964358dfe2_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_bf57dce13fb805a1c9a50374586cf2665363024d58e54b67e9c3f98fd4958317 = $this->env->getExtension("native_profiler");
        $__internal_bf57dce13fb805a1c9a50374586cf2665363024d58e54b67e9c3f98fd4958317->enter($__internal_bf57dce13fb805a1c9a50374586cf2665363024d58e54b67e9c3f98fd4958317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_bf57dce13fb805a1c9a50374586cf2665363024d58e54b67e9c3f98fd4958317->leave($__internal_bf57dce13fb805a1c9a50374586cf2665363024d58e54b67e9c3f98fd4958317_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  136 => 57,  125 => 53,  123 => 52,  121 => 51,  119 => 50,  117 => 49,  113 => 47,  109 => 45,  107 => 44,  105 => 43,  102 => 41,  100 => 40,  98 => 39,  95 => 37,  93 => 36,  90 => 34,  88 => 33,  85 => 31,  83 => 30,  81 => 29,  79 => 28,  77 => 27,  75 => 26,  72 => 25,  70 => 24,  64 => 23,  53 => 18,  48 => 17,  45 => 16,  43 => 15,  37 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block list %}*/
/* {% import 'knp_menu.html.twig' as macros %}*/
/*     {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*         <div{{ macros.attributes(listAttributes) }}>*/
/*             {{ block('children') }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% import 'knp_menu.html.twig' as macros %}*/
/*     {% if item.displayed %}*/
/*         {# building the class of the item #}*/
/*         {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeFirst %}*/
/*             {%- set classes = classes|merge([options.firstClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeLast %}*/
/*             {%- set classes = classes|merge([options.lastClass]) %}*/
/*         {%- endif %}*/
/*         {%- set attributes = item.attributes %}*/
/*         {%- if classes is not empty %}*/
/*             {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*         {%- endif %}*/
/*         {# displaying the item #}*/
/*         {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- else %}*/
/*             {{ block('spanElement') }}*/
/*         {%- endif %}*/
/*         {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {{ block('list') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}<a href="{{ item.uri }}"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}*/
/* */
/* {% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class="list-group-item-heading">{{ block('label') }}</h4></div>{% endblock %}*/
/* */
