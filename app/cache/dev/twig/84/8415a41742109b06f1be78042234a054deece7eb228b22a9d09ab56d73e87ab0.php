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
        $__internal_f3d60d20a6eb3b3b0b59bf3a477edc0dbae2b30449914790a164b818b3257f5e = $this->env->getExtension("native_profiler");
        $__internal_f3d60d20a6eb3b3b0b59bf3a477edc0dbae2b30449914790a164b818b3257f5e->enter($__internal_f3d60d20a6eb3b3b0b59bf3a477edc0dbae2b30449914790a164b818b3257f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d60d20a6eb3b3b0b59bf3a477edc0dbae2b30449914790a164b818b3257f5e->leave($__internal_f3d60d20a6eb3b3b0b59bf3a477edc0dbae2b30449914790a164b818b3257f5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95543ba697c5d7f5b1be9ccf9d3a4499cb85faa1d27fb049d2a06be0a945fe5e = $this->env->getExtension("native_profiler");
        $__internal_95543ba697c5d7f5b1be9ccf9d3a4499cb85faa1d27fb049d2a06be0a945fe5e->enter($__internal_95543ba697c5d7f5b1be9ccf9d3a4499cb85faa1d27fb049d2a06be0a945fe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95543ba697c5d7f5b1be9ccf9d3a4499cb85faa1d27fb049d2a06be0a945fe5e->leave($__internal_95543ba697c5d7f5b1be9ccf9d3a4499cb85faa1d27fb049d2a06be0a945fe5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73165de2df1b5eae6f0609c2ae7077942444947bfee196c214beab3cef1bd07f = $this->env->getExtension("native_profiler");
        $__internal_73165de2df1b5eae6f0609c2ae7077942444947bfee196c214beab3cef1bd07f->enter($__internal_73165de2df1b5eae6f0609c2ae7077942444947bfee196c214beab3cef1bd07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73165de2df1b5eae6f0609c2ae7077942444947bfee196c214beab3cef1bd07f->leave($__internal_73165de2df1b5eae6f0609c2ae7077942444947bfee196c214beab3cef1bd07f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb2f13ecc6dc756df352cc44a1a9cec665fb1d23c07b7ed2e76ca42715e38bd = $this->env->getExtension("native_profiler");
        $__internal_fdb2f13ecc6dc756df352cc44a1a9cec665fb1d23c07b7ed2e76ca42715e38bd->enter($__internal_fdb2f13ecc6dc756df352cc44a1a9cec665fb1d23c07b7ed2e76ca42715e38bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fdb2f13ecc6dc756df352cc44a1a9cec665fb1d23c07b7ed2e76ca42715e38bd->leave($__internal_fdb2f13ecc6dc756df352cc44a1a9cec665fb1d23c07b7ed2e76ca42715e38bd_prof);

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
