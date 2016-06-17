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
        $__internal_4035c878d368f75b981975d9e10811c3ecb2276e162a9eef2560d3a483680132 = $this->env->getExtension("native_profiler");
        $__internal_4035c878d368f75b981975d9e10811c3ecb2276e162a9eef2560d3a483680132->enter($__internal_4035c878d368f75b981975d9e10811c3ecb2276e162a9eef2560d3a483680132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4035c878d368f75b981975d9e10811c3ecb2276e162a9eef2560d3a483680132->leave($__internal_4035c878d368f75b981975d9e10811c3ecb2276e162a9eef2560d3a483680132_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b637d1cb0b446601db81f52bb647d01981900bb70f6f3e6776efd58ca85aae5e = $this->env->getExtension("native_profiler");
        $__internal_b637d1cb0b446601db81f52bb647d01981900bb70f6f3e6776efd58ca85aae5e->enter($__internal_b637d1cb0b446601db81f52bb647d01981900bb70f6f3e6776efd58ca85aae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b637d1cb0b446601db81f52bb647d01981900bb70f6f3e6776efd58ca85aae5e->leave($__internal_b637d1cb0b446601db81f52bb647d01981900bb70f6f3e6776efd58ca85aae5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43bcc101f88400b190f0ee49aa179a7990a8208e25bac7135f7dbc66c22fc22a = $this->env->getExtension("native_profiler");
        $__internal_43bcc101f88400b190f0ee49aa179a7990a8208e25bac7135f7dbc66c22fc22a->enter($__internal_43bcc101f88400b190f0ee49aa179a7990a8208e25bac7135f7dbc66c22fc22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43bcc101f88400b190f0ee49aa179a7990a8208e25bac7135f7dbc66c22fc22a->leave($__internal_43bcc101f88400b190f0ee49aa179a7990a8208e25bac7135f7dbc66c22fc22a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a7d00b505bdde0e5925744704c905d209d2b3087a4dad3712d3730ec4bcf58 = $this->env->getExtension("native_profiler");
        $__internal_74a7d00b505bdde0e5925744704c905d209d2b3087a4dad3712d3730ec4bcf58->enter($__internal_74a7d00b505bdde0e5925744704c905d209d2b3087a4dad3712d3730ec4bcf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_74a7d00b505bdde0e5925744704c905d209d2b3087a4dad3712d3730ec4bcf58->leave($__internal_74a7d00b505bdde0e5925744704c905d209d2b3087a4dad3712d3730ec4bcf58_prof);

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
