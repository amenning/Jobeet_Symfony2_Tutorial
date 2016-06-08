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
        $__internal_e8ffb3947df78419ce9fe572e0895b2ea1556d818981634131a6ea102f362f88 = $this->env->getExtension("native_profiler");
        $__internal_e8ffb3947df78419ce9fe572e0895b2ea1556d818981634131a6ea102f362f88->enter($__internal_e8ffb3947df78419ce9fe572e0895b2ea1556d818981634131a6ea102f362f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ffb3947df78419ce9fe572e0895b2ea1556d818981634131a6ea102f362f88->leave($__internal_e8ffb3947df78419ce9fe572e0895b2ea1556d818981634131a6ea102f362f88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9d57fa8cd186ceac9d1bd92f587f6fe0fbcfacf3f69fa3ff8c0e0f22e737225 = $this->env->getExtension("native_profiler");
        $__internal_f9d57fa8cd186ceac9d1bd92f587f6fe0fbcfacf3f69fa3ff8c0e0f22e737225->enter($__internal_f9d57fa8cd186ceac9d1bd92f587f6fe0fbcfacf3f69fa3ff8c0e0f22e737225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9d57fa8cd186ceac9d1bd92f587f6fe0fbcfacf3f69fa3ff8c0e0f22e737225->leave($__internal_f9d57fa8cd186ceac9d1bd92f587f6fe0fbcfacf3f69fa3ff8c0e0f22e737225_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fdad8a18d05207a6da2528fa861694aa783f85003979f8eda429c4fa19cd728 = $this->env->getExtension("native_profiler");
        $__internal_3fdad8a18d05207a6da2528fa861694aa783f85003979f8eda429c4fa19cd728->enter($__internal_3fdad8a18d05207a6da2528fa861694aa783f85003979f8eda429c4fa19cd728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fdad8a18d05207a6da2528fa861694aa783f85003979f8eda429c4fa19cd728->leave($__internal_3fdad8a18d05207a6da2528fa861694aa783f85003979f8eda429c4fa19cd728_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb21cac36fe3f6036eb4a31a83c5f7bc9f375a3e7e1ac0771a9b0db9176d3f2 = $this->env->getExtension("native_profiler");
        $__internal_beb21cac36fe3f6036eb4a31a83c5f7bc9f375a3e7e1ac0771a9b0db9176d3f2->enter($__internal_beb21cac36fe3f6036eb4a31a83c5f7bc9f375a3e7e1ac0771a9b0db9176d3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_beb21cac36fe3f6036eb4a31a83c5f7bc9f375a3e7e1ac0771a9b0db9176d3f2->leave($__internal_beb21cac36fe3f6036eb4a31a83c5f7bc9f375a3e7e1ac0771a9b0db9176d3f2_prof);

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
