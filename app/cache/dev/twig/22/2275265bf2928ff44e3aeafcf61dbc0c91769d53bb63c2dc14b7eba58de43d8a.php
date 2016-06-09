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
        $__internal_d26eb8bb85ce4d1d2455d9f3c345329e4c58810d1a17f1301e356e650a614d0f = $this->env->getExtension("native_profiler");
        $__internal_d26eb8bb85ce4d1d2455d9f3c345329e4c58810d1a17f1301e356e650a614d0f->enter($__internal_d26eb8bb85ce4d1d2455d9f3c345329e4c58810d1a17f1301e356e650a614d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d26eb8bb85ce4d1d2455d9f3c345329e4c58810d1a17f1301e356e650a614d0f->leave($__internal_d26eb8bb85ce4d1d2455d9f3c345329e4c58810d1a17f1301e356e650a614d0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1d9cf2a2ac1cd20129833c98b3692e5569e38e231fe12908830ee4299812af7 = $this->env->getExtension("native_profiler");
        $__internal_d1d9cf2a2ac1cd20129833c98b3692e5569e38e231fe12908830ee4299812af7->enter($__internal_d1d9cf2a2ac1cd20129833c98b3692e5569e38e231fe12908830ee4299812af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1d9cf2a2ac1cd20129833c98b3692e5569e38e231fe12908830ee4299812af7->leave($__internal_d1d9cf2a2ac1cd20129833c98b3692e5569e38e231fe12908830ee4299812af7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0842ab688b24c3fb025b12b302fb0fceb769187ae42f7bcf709f1786b28d9245 = $this->env->getExtension("native_profiler");
        $__internal_0842ab688b24c3fb025b12b302fb0fceb769187ae42f7bcf709f1786b28d9245->enter($__internal_0842ab688b24c3fb025b12b302fb0fceb769187ae42f7bcf709f1786b28d9245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0842ab688b24c3fb025b12b302fb0fceb769187ae42f7bcf709f1786b28d9245->leave($__internal_0842ab688b24c3fb025b12b302fb0fceb769187ae42f7bcf709f1786b28d9245_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1159b93a7055db639c2418dd38a6e638bd250b7a68f8d2680812e39d9e167bf = $this->env->getExtension("native_profiler");
        $__internal_a1159b93a7055db639c2418dd38a6e638bd250b7a68f8d2680812e39d9e167bf->enter($__internal_a1159b93a7055db639c2418dd38a6e638bd250b7a68f8d2680812e39d9e167bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a1159b93a7055db639c2418dd38a6e638bd250b7a68f8d2680812e39d9e167bf->leave($__internal_a1159b93a7055db639c2418dd38a6e638bd250b7a68f8d2680812e39d9e167bf_prof);

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
