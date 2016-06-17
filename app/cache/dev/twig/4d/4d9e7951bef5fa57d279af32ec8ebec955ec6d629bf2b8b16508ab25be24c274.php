<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_205acc94e542b46da147428f321240ac476171d7c5df3cadb1a93aed8d1ea836 extends Twig_Template
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
        $__internal_26c44254cfdae8446b423833219746df8bec82c1eb2b7851d423f62d21005c60 = $this->env->getExtension("native_profiler");
        $__internal_26c44254cfdae8446b423833219746df8bec82c1eb2b7851d423f62d21005c60->enter($__internal_26c44254cfdae8446b423833219746df8bec82c1eb2b7851d423f62d21005c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c44254cfdae8446b423833219746df8bec82c1eb2b7851d423f62d21005c60->leave($__internal_26c44254cfdae8446b423833219746df8bec82c1eb2b7851d423f62d21005c60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14becba828037d8e02b790f528f9ff7b6df3abd440252663effc3613ea24f6db = $this->env->getExtension("native_profiler");
        $__internal_14becba828037d8e02b790f528f9ff7b6df3abd440252663effc3613ea24f6db->enter($__internal_14becba828037d8e02b790f528f9ff7b6df3abd440252663effc3613ea24f6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14becba828037d8e02b790f528f9ff7b6df3abd440252663effc3613ea24f6db->leave($__internal_14becba828037d8e02b790f528f9ff7b6df3abd440252663effc3613ea24f6db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b672844af70ef092f51cffc5a4c52e32872282b552b4d1f967a600d08d8f1ecd = $this->env->getExtension("native_profiler");
        $__internal_b672844af70ef092f51cffc5a4c52e32872282b552b4d1f967a600d08d8f1ecd->enter($__internal_b672844af70ef092f51cffc5a4c52e32872282b552b4d1f967a600d08d8f1ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b672844af70ef092f51cffc5a4c52e32872282b552b4d1f967a600d08d8f1ecd->leave($__internal_b672844af70ef092f51cffc5a4c52e32872282b552b4d1f967a600d08d8f1ecd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_12263ecb79ddd66f668448a03a8f5cad42e7ae22f4b71d3e4b0edb588a2e8a39 = $this->env->getExtension("native_profiler");
        $__internal_12263ecb79ddd66f668448a03a8f5cad42e7ae22f4b71d3e4b0edb588a2e8a39->enter($__internal_12263ecb79ddd66f668448a03a8f5cad42e7ae22f4b71d3e4b0edb588a2e8a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_12263ecb79ddd66f668448a03a8f5cad42e7ae22f4b71d3e4b0edb588a2e8a39->leave($__internal_12263ecb79ddd66f668448a03a8f5cad42e7ae22f4b71d3e4b0edb588a2e8a39_prof);

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
