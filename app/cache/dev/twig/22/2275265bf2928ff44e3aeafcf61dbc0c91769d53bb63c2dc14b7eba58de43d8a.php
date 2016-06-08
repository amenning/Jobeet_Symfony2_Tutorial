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
        $__internal_2fe85d9d4ef4e2214b5df622e85f8a15174f834a924c14faf6d33aa632f08b10 = $this->env->getExtension("native_profiler");
        $__internal_2fe85d9d4ef4e2214b5df622e85f8a15174f834a924c14faf6d33aa632f08b10->enter($__internal_2fe85d9d4ef4e2214b5df622e85f8a15174f834a924c14faf6d33aa632f08b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe85d9d4ef4e2214b5df622e85f8a15174f834a924c14faf6d33aa632f08b10->leave($__internal_2fe85d9d4ef4e2214b5df622e85f8a15174f834a924c14faf6d33aa632f08b10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c29ec56af38ab80ebfe9a47fc6f55fdd0ee02e1b951efe6b1b4a73545f178f49 = $this->env->getExtension("native_profiler");
        $__internal_c29ec56af38ab80ebfe9a47fc6f55fdd0ee02e1b951efe6b1b4a73545f178f49->enter($__internal_c29ec56af38ab80ebfe9a47fc6f55fdd0ee02e1b951efe6b1b4a73545f178f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c29ec56af38ab80ebfe9a47fc6f55fdd0ee02e1b951efe6b1b4a73545f178f49->leave($__internal_c29ec56af38ab80ebfe9a47fc6f55fdd0ee02e1b951efe6b1b4a73545f178f49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c86cfe4998766699d595f2e3bd2fe154e462eba91cd1fc0bf69fe1d94efed4fa = $this->env->getExtension("native_profiler");
        $__internal_c86cfe4998766699d595f2e3bd2fe154e462eba91cd1fc0bf69fe1d94efed4fa->enter($__internal_c86cfe4998766699d595f2e3bd2fe154e462eba91cd1fc0bf69fe1d94efed4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c86cfe4998766699d595f2e3bd2fe154e462eba91cd1fc0bf69fe1d94efed4fa->leave($__internal_c86cfe4998766699d595f2e3bd2fe154e462eba91cd1fc0bf69fe1d94efed4fa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_597b52f4b23a55652589bb3b06cc6d5834acc5315bd5e07f8d05b0661ff9ea1a = $this->env->getExtension("native_profiler");
        $__internal_597b52f4b23a55652589bb3b06cc6d5834acc5315bd5e07f8d05b0661ff9ea1a->enter($__internal_597b52f4b23a55652589bb3b06cc6d5834acc5315bd5e07f8d05b0661ff9ea1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_597b52f4b23a55652589bb3b06cc6d5834acc5315bd5e07f8d05b0661ff9ea1a->leave($__internal_597b52f4b23a55652589bb3b06cc6d5834acc5315bd5e07f8d05b0661ff9ea1a_prof);

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
