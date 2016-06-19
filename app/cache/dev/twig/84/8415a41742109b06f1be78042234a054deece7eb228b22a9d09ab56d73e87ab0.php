<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c00035491781223455851eb1727d96d91413b2648db13cf907fa246c50ef2fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_077dc5dba5ce0f3476d0f4732ee8cfdb4cef853c7d864f5677706ab532aff67f = $this->env->getExtension("native_profiler");
        $__internal_077dc5dba5ce0f3476d0f4732ee8cfdb4cef853c7d864f5677706ab532aff67f->enter($__internal_077dc5dba5ce0f3476d0f4732ee8cfdb4cef853c7d864f5677706ab532aff67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077dc5dba5ce0f3476d0f4732ee8cfdb4cef853c7d864f5677706ab532aff67f->leave($__internal_077dc5dba5ce0f3476d0f4732ee8cfdb4cef853c7d864f5677706ab532aff67f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c717e5192999a7ccda049bc496d4c01e789bdd31ee31a924c3bab989055f9ce2 = $this->env->getExtension("native_profiler");
        $__internal_c717e5192999a7ccda049bc496d4c01e789bdd31ee31a924c3bab989055f9ce2->enter($__internal_c717e5192999a7ccda049bc496d4c01e789bdd31ee31a924c3bab989055f9ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c717e5192999a7ccda049bc496d4c01e789bdd31ee31a924c3bab989055f9ce2->leave($__internal_c717e5192999a7ccda049bc496d4c01e789bdd31ee31a924c3bab989055f9ce2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c76c08d676834a715ca05e5e8ad0b01fc0d0d27de44b0896cbcd1a408660081 = $this->env->getExtension("native_profiler");
        $__internal_5c76c08d676834a715ca05e5e8ad0b01fc0d0d27de44b0896cbcd1a408660081->enter($__internal_5c76c08d676834a715ca05e5e8ad0b01fc0d0d27de44b0896cbcd1a408660081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c76c08d676834a715ca05e5e8ad0b01fc0d0d27de44b0896cbcd1a408660081->leave($__internal_5c76c08d676834a715ca05e5e8ad0b01fc0d0d27de44b0896cbcd1a408660081_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30413ce6a220b5eb38df50178d08c8aa61651f4f9690777021a8cd3335c5fb43 = $this->env->getExtension("native_profiler");
        $__internal_30413ce6a220b5eb38df50178d08c8aa61651f4f9690777021a8cd3335c5fb43->enter($__internal_30413ce6a220b5eb38df50178d08c8aa61651f4f9690777021a8cd3335c5fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_30413ce6a220b5eb38df50178d08c8aa61651f4f9690777021a8cd3335c5fb43->leave($__internal_30413ce6a220b5eb38df50178d08c8aa61651f4f9690777021a8cd3335c5fb43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
