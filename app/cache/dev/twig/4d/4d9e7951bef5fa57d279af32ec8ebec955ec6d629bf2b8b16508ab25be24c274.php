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
        $__internal_ebfa7a74da9d2ecb350b98a2bc8f0cdf47fe14e9b2e31698bb4e8a9b06bd0c15 = $this->env->getExtension("native_profiler");
        $__internal_ebfa7a74da9d2ecb350b98a2bc8f0cdf47fe14e9b2e31698bb4e8a9b06bd0c15->enter($__internal_ebfa7a74da9d2ecb350b98a2bc8f0cdf47fe14e9b2e31698bb4e8a9b06bd0c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebfa7a74da9d2ecb350b98a2bc8f0cdf47fe14e9b2e31698bb4e8a9b06bd0c15->leave($__internal_ebfa7a74da9d2ecb350b98a2bc8f0cdf47fe14e9b2e31698bb4e8a9b06bd0c15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff91cd150ffa33f3522416e8add80a46881c9d8f83f297e9466623e58f2caafd = $this->env->getExtension("native_profiler");
        $__internal_ff91cd150ffa33f3522416e8add80a46881c9d8f83f297e9466623e58f2caafd->enter($__internal_ff91cd150ffa33f3522416e8add80a46881c9d8f83f297e9466623e58f2caafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff91cd150ffa33f3522416e8add80a46881c9d8f83f297e9466623e58f2caafd->leave($__internal_ff91cd150ffa33f3522416e8add80a46881c9d8f83f297e9466623e58f2caafd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0165a500b9a1026b1a4032e4c19a8d910e0f75ec826fdf9c41af4da986d197bd = $this->env->getExtension("native_profiler");
        $__internal_0165a500b9a1026b1a4032e4c19a8d910e0f75ec826fdf9c41af4da986d197bd->enter($__internal_0165a500b9a1026b1a4032e4c19a8d910e0f75ec826fdf9c41af4da986d197bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0165a500b9a1026b1a4032e4c19a8d910e0f75ec826fdf9c41af4da986d197bd->leave($__internal_0165a500b9a1026b1a4032e4c19a8d910e0f75ec826fdf9c41af4da986d197bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee168230b055da50165b9c7017c7ecce3fdfa2a0bd127e912b52ab7b777ef54a = $this->env->getExtension("native_profiler");
        $__internal_ee168230b055da50165b9c7017c7ecce3fdfa2a0bd127e912b52ab7b777ef54a->enter($__internal_ee168230b055da50165b9c7017c7ecce3fdfa2a0bd127e912b52ab7b777ef54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ee168230b055da50165b9c7017c7ecce3fdfa2a0bd127e912b52ab7b777ef54a->leave($__internal_ee168230b055da50165b9c7017c7ecce3fdfa2a0bd127e912b52ab7b777ef54a_prof);

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
