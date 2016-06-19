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
        $__internal_91a666cfb8641b7c9ebda687f0062f95442e430f024b72657a781fd057eda5b1 = $this->env->getExtension("native_profiler");
        $__internal_91a666cfb8641b7c9ebda687f0062f95442e430f024b72657a781fd057eda5b1->enter($__internal_91a666cfb8641b7c9ebda687f0062f95442e430f024b72657a781fd057eda5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a666cfb8641b7c9ebda687f0062f95442e430f024b72657a781fd057eda5b1->leave($__internal_91a666cfb8641b7c9ebda687f0062f95442e430f024b72657a781fd057eda5b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_831472fd550c9e4d2b547fbf2fe06368b71733f83b1230b1e334b1c875624d3e = $this->env->getExtension("native_profiler");
        $__internal_831472fd550c9e4d2b547fbf2fe06368b71733f83b1230b1e334b1c875624d3e->enter($__internal_831472fd550c9e4d2b547fbf2fe06368b71733f83b1230b1e334b1c875624d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_831472fd550c9e4d2b547fbf2fe06368b71733f83b1230b1e334b1c875624d3e->leave($__internal_831472fd550c9e4d2b547fbf2fe06368b71733f83b1230b1e334b1c875624d3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e01c3099a7cb83949b2043fae10eccc8f293847798f8d8ff236ba8fb60dabfa = $this->env->getExtension("native_profiler");
        $__internal_2e01c3099a7cb83949b2043fae10eccc8f293847798f8d8ff236ba8fb60dabfa->enter($__internal_2e01c3099a7cb83949b2043fae10eccc8f293847798f8d8ff236ba8fb60dabfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e01c3099a7cb83949b2043fae10eccc8f293847798f8d8ff236ba8fb60dabfa->leave($__internal_2e01c3099a7cb83949b2043fae10eccc8f293847798f8d8ff236ba8fb60dabfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25640fa1bc203d70f865aca6b49b870df507a76a19ca04b3c55396da7a226c01 = $this->env->getExtension("native_profiler");
        $__internal_25640fa1bc203d70f865aca6b49b870df507a76a19ca04b3c55396da7a226c01->enter($__internal_25640fa1bc203d70f865aca6b49b870df507a76a19ca04b3c55396da7a226c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_25640fa1bc203d70f865aca6b49b870df507a76a19ca04b3c55396da7a226c01->leave($__internal_25640fa1bc203d70f865aca6b49b870df507a76a19ca04b3c55396da7a226c01_prof);

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
