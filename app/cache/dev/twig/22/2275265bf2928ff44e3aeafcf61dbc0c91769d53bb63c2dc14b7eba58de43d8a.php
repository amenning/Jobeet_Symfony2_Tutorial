<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd21389088e4f3b8f58869a44a4f058d6edbfb83839a541d4d9232143681ad92 = $this->env->getExtension("native_profiler");
        $__internal_bd21389088e4f3b8f58869a44a4f058d6edbfb83839a541d4d9232143681ad92->enter($__internal_bd21389088e4f3b8f58869a44a4f058d6edbfb83839a541d4d9232143681ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd21389088e4f3b8f58869a44a4f058d6edbfb83839a541d4d9232143681ad92->leave($__internal_bd21389088e4f3b8f58869a44a4f058d6edbfb83839a541d4d9232143681ad92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d732ca69e902764a18faa1bc02b114654e3c43389908bab49b7926281b548f6f = $this->env->getExtension("native_profiler");
        $__internal_d732ca69e902764a18faa1bc02b114654e3c43389908bab49b7926281b548f6f->enter($__internal_d732ca69e902764a18faa1bc02b114654e3c43389908bab49b7926281b548f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d732ca69e902764a18faa1bc02b114654e3c43389908bab49b7926281b548f6f->leave($__internal_d732ca69e902764a18faa1bc02b114654e3c43389908bab49b7926281b548f6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e52625dddda02d28d6ab4b20d0eb820942dc9c684392078f0d12ccff605f49cb = $this->env->getExtension("native_profiler");
        $__internal_e52625dddda02d28d6ab4b20d0eb820942dc9c684392078f0d12ccff605f49cb->enter($__internal_e52625dddda02d28d6ab4b20d0eb820942dc9c684392078f0d12ccff605f49cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e52625dddda02d28d6ab4b20d0eb820942dc9c684392078f0d12ccff605f49cb->leave($__internal_e52625dddda02d28d6ab4b20d0eb820942dc9c684392078f0d12ccff605f49cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd6be0fa0dd63dc55bdcefc26ee8e47edb3fe081310c6e005136c9384eed82b = $this->env->getExtension("native_profiler");
        $__internal_7dd6be0fa0dd63dc55bdcefc26ee8e47edb3fe081310c6e005136c9384eed82b->enter($__internal_7dd6be0fa0dd63dc55bdcefc26ee8e47edb3fe081310c6e005136c9384eed82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7dd6be0fa0dd63dc55bdcefc26ee8e47edb3fe081310c6e005136c9384eed82b->leave($__internal_7dd6be0fa0dd63dc55bdcefc26ee8e47edb3fe081310c6e005136c9384eed82b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
