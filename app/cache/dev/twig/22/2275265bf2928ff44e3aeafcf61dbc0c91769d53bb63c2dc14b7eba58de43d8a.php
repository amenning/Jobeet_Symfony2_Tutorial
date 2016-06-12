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
        $__internal_47218895d699c9588ca6142f931ae7806ab782797e37654bc7b09fbde5c43384 = $this->env->getExtension("native_profiler");
        $__internal_47218895d699c9588ca6142f931ae7806ab782797e37654bc7b09fbde5c43384->enter($__internal_47218895d699c9588ca6142f931ae7806ab782797e37654bc7b09fbde5c43384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47218895d699c9588ca6142f931ae7806ab782797e37654bc7b09fbde5c43384->leave($__internal_47218895d699c9588ca6142f931ae7806ab782797e37654bc7b09fbde5c43384_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8347dcd895f9b7b60167f0d903ee9a980ad95b472e9c1010944a6f13e4ef07c = $this->env->getExtension("native_profiler");
        $__internal_d8347dcd895f9b7b60167f0d903ee9a980ad95b472e9c1010944a6f13e4ef07c->enter($__internal_d8347dcd895f9b7b60167f0d903ee9a980ad95b472e9c1010944a6f13e4ef07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d8347dcd895f9b7b60167f0d903ee9a980ad95b472e9c1010944a6f13e4ef07c->leave($__internal_d8347dcd895f9b7b60167f0d903ee9a980ad95b472e9c1010944a6f13e4ef07c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e10416c592a0aa5927cc39ec680d9aeae10167d0ad4c75ed9a3c9f155926f90e = $this->env->getExtension("native_profiler");
        $__internal_e10416c592a0aa5927cc39ec680d9aeae10167d0ad4c75ed9a3c9f155926f90e->enter($__internal_e10416c592a0aa5927cc39ec680d9aeae10167d0ad4c75ed9a3c9f155926f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e10416c592a0aa5927cc39ec680d9aeae10167d0ad4c75ed9a3c9f155926f90e->leave($__internal_e10416c592a0aa5927cc39ec680d9aeae10167d0ad4c75ed9a3c9f155926f90e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8311d467bfbfcdf9c3c017fc6dd856560ca3b961347d1fb40c6a78ec2204cc91 = $this->env->getExtension("native_profiler");
        $__internal_8311d467bfbfcdf9c3c017fc6dd856560ca3b961347d1fb40c6a78ec2204cc91->enter($__internal_8311d467bfbfcdf9c3c017fc6dd856560ca3b961347d1fb40c6a78ec2204cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8311d467bfbfcdf9c3c017fc6dd856560ca3b961347d1fb40c6a78ec2204cc91->leave($__internal_8311d467bfbfcdf9c3c017fc6dd856560ca3b961347d1fb40c6a78ec2204cc91_prof);

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
