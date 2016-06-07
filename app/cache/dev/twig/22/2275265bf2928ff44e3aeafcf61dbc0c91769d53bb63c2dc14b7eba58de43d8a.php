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
        $__internal_df5f9991e8d0260b0c2c4b478201d8b4819c2d69b2c26a8a27ce007d67459e0d = $this->env->getExtension("native_profiler");
        $__internal_df5f9991e8d0260b0c2c4b478201d8b4819c2d69b2c26a8a27ce007d67459e0d->enter($__internal_df5f9991e8d0260b0c2c4b478201d8b4819c2d69b2c26a8a27ce007d67459e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5f9991e8d0260b0c2c4b478201d8b4819c2d69b2c26a8a27ce007d67459e0d->leave($__internal_df5f9991e8d0260b0c2c4b478201d8b4819c2d69b2c26a8a27ce007d67459e0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2ea04d7fd3736a5c1e1c5d7cc211b04cd5f2fcd58e2dbaaf5027bbe84a18c92 = $this->env->getExtension("native_profiler");
        $__internal_b2ea04d7fd3736a5c1e1c5d7cc211b04cd5f2fcd58e2dbaaf5027bbe84a18c92->enter($__internal_b2ea04d7fd3736a5c1e1c5d7cc211b04cd5f2fcd58e2dbaaf5027bbe84a18c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b2ea04d7fd3736a5c1e1c5d7cc211b04cd5f2fcd58e2dbaaf5027bbe84a18c92->leave($__internal_b2ea04d7fd3736a5c1e1c5d7cc211b04cd5f2fcd58e2dbaaf5027bbe84a18c92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bda5711361a8c8be15d43b63bc89eafd811924db45a34821f3b308b11d0b804e = $this->env->getExtension("native_profiler");
        $__internal_bda5711361a8c8be15d43b63bc89eafd811924db45a34821f3b308b11d0b804e->enter($__internal_bda5711361a8c8be15d43b63bc89eafd811924db45a34821f3b308b11d0b804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bda5711361a8c8be15d43b63bc89eafd811924db45a34821f3b308b11d0b804e->leave($__internal_bda5711361a8c8be15d43b63bc89eafd811924db45a34821f3b308b11d0b804e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_762b9998e645d736722be38cbb7dc94e5e62ef210b0fc94dc438c8d4af9f17e5 = $this->env->getExtension("native_profiler");
        $__internal_762b9998e645d736722be38cbb7dc94e5e62ef210b0fc94dc438c8d4af9f17e5->enter($__internal_762b9998e645d736722be38cbb7dc94e5e62ef210b0fc94dc438c8d4af9f17e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_762b9998e645d736722be38cbb7dc94e5e62ef210b0fc94dc438c8d4af9f17e5->leave($__internal_762b9998e645d736722be38cbb7dc94e5e62ef210b0fc94dc438c8d4af9f17e5_prof);

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
