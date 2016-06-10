<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
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
        $__internal_6001d036675376d7242b51d2e6af53a073650aae368372363f801180cd4f2cf6 = $this->env->getExtension("native_profiler");
        $__internal_6001d036675376d7242b51d2e6af53a073650aae368372363f801180cd4f2cf6->enter($__internal_6001d036675376d7242b51d2e6af53a073650aae368372363f801180cd4f2cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6001d036675376d7242b51d2e6af53a073650aae368372363f801180cd4f2cf6->leave($__internal_6001d036675376d7242b51d2e6af53a073650aae368372363f801180cd4f2cf6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_accf2843196b611aab09f9550de70efe2e28a3ee48a481e0ba63e151d0a34c5b = $this->env->getExtension("native_profiler");
        $__internal_accf2843196b611aab09f9550de70efe2e28a3ee48a481e0ba63e151d0a34c5b->enter($__internal_accf2843196b611aab09f9550de70efe2e28a3ee48a481e0ba63e151d0a34c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_accf2843196b611aab09f9550de70efe2e28a3ee48a481e0ba63e151d0a34c5b->leave($__internal_accf2843196b611aab09f9550de70efe2e28a3ee48a481e0ba63e151d0a34c5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_327af5b6b748f8350121a83603c5b253511c382b4414cf46cbbf8d8776357c3e = $this->env->getExtension("native_profiler");
        $__internal_327af5b6b748f8350121a83603c5b253511c382b4414cf46cbbf8d8776357c3e->enter($__internal_327af5b6b748f8350121a83603c5b253511c382b4414cf46cbbf8d8776357c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_327af5b6b748f8350121a83603c5b253511c382b4414cf46cbbf8d8776357c3e->leave($__internal_327af5b6b748f8350121a83603c5b253511c382b4414cf46cbbf8d8776357c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c518931683e1db97c6667d3718aecbc7ec13a50f906925d7f0830626016b6a = $this->env->getExtension("native_profiler");
        $__internal_b3c518931683e1db97c6667d3718aecbc7ec13a50f906925d7f0830626016b6a->enter($__internal_b3c518931683e1db97c6667d3718aecbc7ec13a50f906925d7f0830626016b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3c518931683e1db97c6667d3718aecbc7ec13a50f906925d7f0830626016b6a->leave($__internal_b3c518931683e1db97c6667d3718aecbc7ec13a50f906925d7f0830626016b6a_prof);

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
