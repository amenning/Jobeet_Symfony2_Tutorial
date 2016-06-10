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
        $__internal_7cda8e40ede2e471ddda151efca93f08c2a33b2bd58803bea17aa5edfcd89bc5 = $this->env->getExtension("native_profiler");
        $__internal_7cda8e40ede2e471ddda151efca93f08c2a33b2bd58803bea17aa5edfcd89bc5->enter($__internal_7cda8e40ede2e471ddda151efca93f08c2a33b2bd58803bea17aa5edfcd89bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cda8e40ede2e471ddda151efca93f08c2a33b2bd58803bea17aa5edfcd89bc5->leave($__internal_7cda8e40ede2e471ddda151efca93f08c2a33b2bd58803bea17aa5edfcd89bc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c28bee150646c29367c8fde308a7d00028cd6dcf4ce84f90d6b331bc5e05cca8 = $this->env->getExtension("native_profiler");
        $__internal_c28bee150646c29367c8fde308a7d00028cd6dcf4ce84f90d6b331bc5e05cca8->enter($__internal_c28bee150646c29367c8fde308a7d00028cd6dcf4ce84f90d6b331bc5e05cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c28bee150646c29367c8fde308a7d00028cd6dcf4ce84f90d6b331bc5e05cca8->leave($__internal_c28bee150646c29367c8fde308a7d00028cd6dcf4ce84f90d6b331bc5e05cca8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bb5013e86972187950fe5fd18e0e96295b76c1a84e1c33c571f28e3027cfc05 = $this->env->getExtension("native_profiler");
        $__internal_2bb5013e86972187950fe5fd18e0e96295b76c1a84e1c33c571f28e3027cfc05->enter($__internal_2bb5013e86972187950fe5fd18e0e96295b76c1a84e1c33c571f28e3027cfc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2bb5013e86972187950fe5fd18e0e96295b76c1a84e1c33c571f28e3027cfc05->leave($__internal_2bb5013e86972187950fe5fd18e0e96295b76c1a84e1c33c571f28e3027cfc05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3af5b1e565fae6ef2c37ccd3a6e6d893d3d0ef27f88151723c8a915ed4868a19 = $this->env->getExtension("native_profiler");
        $__internal_3af5b1e565fae6ef2c37ccd3a6e6d893d3d0ef27f88151723c8a915ed4868a19->enter($__internal_3af5b1e565fae6ef2c37ccd3a6e6d893d3d0ef27f88151723c8a915ed4868a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3af5b1e565fae6ef2c37ccd3a6e6d893d3d0ef27f88151723c8a915ed4868a19->leave($__internal_3af5b1e565fae6ef2c37ccd3a6e6d893d3d0ef27f88151723c8a915ed4868a19_prof);

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
