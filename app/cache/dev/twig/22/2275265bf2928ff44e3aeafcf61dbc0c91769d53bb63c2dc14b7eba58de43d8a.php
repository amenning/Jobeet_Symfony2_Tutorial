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
        $__internal_4ae9e6caf7a7a40e55d7a68a95d53e97ba49acbe830715f8e4c4c974d46d5a36 = $this->env->getExtension("native_profiler");
        $__internal_4ae9e6caf7a7a40e55d7a68a95d53e97ba49acbe830715f8e4c4c974d46d5a36->enter($__internal_4ae9e6caf7a7a40e55d7a68a95d53e97ba49acbe830715f8e4c4c974d46d5a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae9e6caf7a7a40e55d7a68a95d53e97ba49acbe830715f8e4c4c974d46d5a36->leave($__internal_4ae9e6caf7a7a40e55d7a68a95d53e97ba49acbe830715f8e4c4c974d46d5a36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2cdcb1b22f79b7f95ed38a362522d416282595000b3e21b94138e6167398cec = $this->env->getExtension("native_profiler");
        $__internal_d2cdcb1b22f79b7f95ed38a362522d416282595000b3e21b94138e6167398cec->enter($__internal_d2cdcb1b22f79b7f95ed38a362522d416282595000b3e21b94138e6167398cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2cdcb1b22f79b7f95ed38a362522d416282595000b3e21b94138e6167398cec->leave($__internal_d2cdcb1b22f79b7f95ed38a362522d416282595000b3e21b94138e6167398cec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ceaaedda4528ff8d4d393268b5b3fcdd2562c39fd14cd3d4b6c83ad8a2428f1 = $this->env->getExtension("native_profiler");
        $__internal_9ceaaedda4528ff8d4d393268b5b3fcdd2562c39fd14cd3d4b6c83ad8a2428f1->enter($__internal_9ceaaedda4528ff8d4d393268b5b3fcdd2562c39fd14cd3d4b6c83ad8a2428f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ceaaedda4528ff8d4d393268b5b3fcdd2562c39fd14cd3d4b6c83ad8a2428f1->leave($__internal_9ceaaedda4528ff8d4d393268b5b3fcdd2562c39fd14cd3d4b6c83ad8a2428f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4342aae8cbcbf564d352fd20497e0e842a7d61ca2cd2b15d699e4ce3c6cdc841 = $this->env->getExtension("native_profiler");
        $__internal_4342aae8cbcbf564d352fd20497e0e842a7d61ca2cd2b15d699e4ce3c6cdc841->enter($__internal_4342aae8cbcbf564d352fd20497e0e842a7d61ca2cd2b15d699e4ce3c6cdc841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4342aae8cbcbf564d352fd20497e0e842a7d61ca2cd2b15d699e4ce3c6cdc841->leave($__internal_4342aae8cbcbf564d352fd20497e0e842a7d61ca2cd2b15d699e4ce3c6cdc841_prof);

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
