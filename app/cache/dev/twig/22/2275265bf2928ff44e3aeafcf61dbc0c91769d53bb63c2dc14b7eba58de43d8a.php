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
        $__internal_f31d8686808ceca25ded3ebe74819b3913e927e0922347eddb663c9b2495b1ad = $this->env->getExtension("native_profiler");
        $__internal_f31d8686808ceca25ded3ebe74819b3913e927e0922347eddb663c9b2495b1ad->enter($__internal_f31d8686808ceca25ded3ebe74819b3913e927e0922347eddb663c9b2495b1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31d8686808ceca25ded3ebe74819b3913e927e0922347eddb663c9b2495b1ad->leave($__internal_f31d8686808ceca25ded3ebe74819b3913e927e0922347eddb663c9b2495b1ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_806bf5f0f7b8468416f063f05fe4da908d870781838a23876942d95bd9d58b93 = $this->env->getExtension("native_profiler");
        $__internal_806bf5f0f7b8468416f063f05fe4da908d870781838a23876942d95bd9d58b93->enter($__internal_806bf5f0f7b8468416f063f05fe4da908d870781838a23876942d95bd9d58b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_806bf5f0f7b8468416f063f05fe4da908d870781838a23876942d95bd9d58b93->leave($__internal_806bf5f0f7b8468416f063f05fe4da908d870781838a23876942d95bd9d58b93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5b0547a935414c11719f07ff2d7f9c7a188bf3e8d472d95816f09a43f4b4fcd = $this->env->getExtension("native_profiler");
        $__internal_b5b0547a935414c11719f07ff2d7f9c7a188bf3e8d472d95816f09a43f4b4fcd->enter($__internal_b5b0547a935414c11719f07ff2d7f9c7a188bf3e8d472d95816f09a43f4b4fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5b0547a935414c11719f07ff2d7f9c7a188bf3e8d472d95816f09a43f4b4fcd->leave($__internal_b5b0547a935414c11719f07ff2d7f9c7a188bf3e8d472d95816f09a43f4b4fcd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e0cf7ac1f661c98f1d9eca230707d28bff24efb4f98fb6c558c63543d7b0026 = $this->env->getExtension("native_profiler");
        $__internal_4e0cf7ac1f661c98f1d9eca230707d28bff24efb4f98fb6c558c63543d7b0026->enter($__internal_4e0cf7ac1f661c98f1d9eca230707d28bff24efb4f98fb6c558c63543d7b0026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e0cf7ac1f661c98f1d9eca230707d28bff24efb4f98fb6c558c63543d7b0026->leave($__internal_4e0cf7ac1f661c98f1d9eca230707d28bff24efb4f98fb6c558c63543d7b0026_prof);

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
