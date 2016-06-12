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
        $__internal_ecfb1734ec48b27cd5d3c189539e3e5c9986f054c573e60e426517c1a60c6530 = $this->env->getExtension("native_profiler");
        $__internal_ecfb1734ec48b27cd5d3c189539e3e5c9986f054c573e60e426517c1a60c6530->enter($__internal_ecfb1734ec48b27cd5d3c189539e3e5c9986f054c573e60e426517c1a60c6530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfb1734ec48b27cd5d3c189539e3e5c9986f054c573e60e426517c1a60c6530->leave($__internal_ecfb1734ec48b27cd5d3c189539e3e5c9986f054c573e60e426517c1a60c6530_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87adfc07ded7e2cb6b2c93f3a3430ec3104d45ff510127a7e596ff54a79073f4 = $this->env->getExtension("native_profiler");
        $__internal_87adfc07ded7e2cb6b2c93f3a3430ec3104d45ff510127a7e596ff54a79073f4->enter($__internal_87adfc07ded7e2cb6b2c93f3a3430ec3104d45ff510127a7e596ff54a79073f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87adfc07ded7e2cb6b2c93f3a3430ec3104d45ff510127a7e596ff54a79073f4->leave($__internal_87adfc07ded7e2cb6b2c93f3a3430ec3104d45ff510127a7e596ff54a79073f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f34e62c4795d68f092e52e368014d5b10e63bbb6a2e1e4d5ac27adefcb2ff23 = $this->env->getExtension("native_profiler");
        $__internal_4f34e62c4795d68f092e52e368014d5b10e63bbb6a2e1e4d5ac27adefcb2ff23->enter($__internal_4f34e62c4795d68f092e52e368014d5b10e63bbb6a2e1e4d5ac27adefcb2ff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f34e62c4795d68f092e52e368014d5b10e63bbb6a2e1e4d5ac27adefcb2ff23->leave($__internal_4f34e62c4795d68f092e52e368014d5b10e63bbb6a2e1e4d5ac27adefcb2ff23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f61639fa347bbea9be87cc25cf969d610898ef91b8978bf46217a3170a2bb04c = $this->env->getExtension("native_profiler");
        $__internal_f61639fa347bbea9be87cc25cf969d610898ef91b8978bf46217a3170a2bb04c->enter($__internal_f61639fa347bbea9be87cc25cf969d610898ef91b8978bf46217a3170a2bb04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f61639fa347bbea9be87cc25cf969d610898ef91b8978bf46217a3170a2bb04c->leave($__internal_f61639fa347bbea9be87cc25cf969d610898ef91b8978bf46217a3170a2bb04c_prof);

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
