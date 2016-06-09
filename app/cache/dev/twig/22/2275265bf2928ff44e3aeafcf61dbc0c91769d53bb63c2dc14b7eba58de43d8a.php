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
        $__internal_8960cafb3aef8b98f14af31f0ffdad972c8381972579a7cbddb8b208df7aa004 = $this->env->getExtension("native_profiler");
        $__internal_8960cafb3aef8b98f14af31f0ffdad972c8381972579a7cbddb8b208df7aa004->enter($__internal_8960cafb3aef8b98f14af31f0ffdad972c8381972579a7cbddb8b208df7aa004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8960cafb3aef8b98f14af31f0ffdad972c8381972579a7cbddb8b208df7aa004->leave($__internal_8960cafb3aef8b98f14af31f0ffdad972c8381972579a7cbddb8b208df7aa004_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4069100e7bd6b47602d8c4d8b31a2899a197efaa4688a2b25b16b3d438e0fa22 = $this->env->getExtension("native_profiler");
        $__internal_4069100e7bd6b47602d8c4d8b31a2899a197efaa4688a2b25b16b3d438e0fa22->enter($__internal_4069100e7bd6b47602d8c4d8b31a2899a197efaa4688a2b25b16b3d438e0fa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4069100e7bd6b47602d8c4d8b31a2899a197efaa4688a2b25b16b3d438e0fa22->leave($__internal_4069100e7bd6b47602d8c4d8b31a2899a197efaa4688a2b25b16b3d438e0fa22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee4412e9806ae6852b147fe2ab86ee464d11b673c127b4fb04cd245c567438f5 = $this->env->getExtension("native_profiler");
        $__internal_ee4412e9806ae6852b147fe2ab86ee464d11b673c127b4fb04cd245c567438f5->enter($__internal_ee4412e9806ae6852b147fe2ab86ee464d11b673c127b4fb04cd245c567438f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee4412e9806ae6852b147fe2ab86ee464d11b673c127b4fb04cd245c567438f5->leave($__internal_ee4412e9806ae6852b147fe2ab86ee464d11b673c127b4fb04cd245c567438f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6520920b27e35d3f98de3f95fec1b2c4a29ccd658860d4230e506c8e162b4303 = $this->env->getExtension("native_profiler");
        $__internal_6520920b27e35d3f98de3f95fec1b2c4a29ccd658860d4230e506c8e162b4303->enter($__internal_6520920b27e35d3f98de3f95fec1b2c4a29ccd658860d4230e506c8e162b4303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6520920b27e35d3f98de3f95fec1b2c4a29ccd658860d4230e506c8e162b4303->leave($__internal_6520920b27e35d3f98de3f95fec1b2c4a29ccd658860d4230e506c8e162b4303_prof);

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
