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
        $__internal_ad77ec61ed64b37e589c6d124a94c9d218d666fe6bceea6752ea9588dae4b60e = $this->env->getExtension("native_profiler");
        $__internal_ad77ec61ed64b37e589c6d124a94c9d218d666fe6bceea6752ea9588dae4b60e->enter($__internal_ad77ec61ed64b37e589c6d124a94c9d218d666fe6bceea6752ea9588dae4b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad77ec61ed64b37e589c6d124a94c9d218d666fe6bceea6752ea9588dae4b60e->leave($__internal_ad77ec61ed64b37e589c6d124a94c9d218d666fe6bceea6752ea9588dae4b60e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_067633c124059870b8291af0b09b633a9abf6648237112ac402f25c71b223fe7 = $this->env->getExtension("native_profiler");
        $__internal_067633c124059870b8291af0b09b633a9abf6648237112ac402f25c71b223fe7->enter($__internal_067633c124059870b8291af0b09b633a9abf6648237112ac402f25c71b223fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_067633c124059870b8291af0b09b633a9abf6648237112ac402f25c71b223fe7->leave($__internal_067633c124059870b8291af0b09b633a9abf6648237112ac402f25c71b223fe7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ad5de848903b2c36cd60a71abafdec9b70abf176f930fe4733a26ce3059d5d = $this->env->getExtension("native_profiler");
        $__internal_60ad5de848903b2c36cd60a71abafdec9b70abf176f930fe4733a26ce3059d5d->enter($__internal_60ad5de848903b2c36cd60a71abafdec9b70abf176f930fe4733a26ce3059d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60ad5de848903b2c36cd60a71abafdec9b70abf176f930fe4733a26ce3059d5d->leave($__internal_60ad5de848903b2c36cd60a71abafdec9b70abf176f930fe4733a26ce3059d5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5955c0031a60b4477b530e53ec92cf5def3cb3146d517fa13ad9adf80bcc5d87 = $this->env->getExtension("native_profiler");
        $__internal_5955c0031a60b4477b530e53ec92cf5def3cb3146d517fa13ad9adf80bcc5d87->enter($__internal_5955c0031a60b4477b530e53ec92cf5def3cb3146d517fa13ad9adf80bcc5d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5955c0031a60b4477b530e53ec92cf5def3cb3146d517fa13ad9adf80bcc5d87->leave($__internal_5955c0031a60b4477b530e53ec92cf5def3cb3146d517fa13ad9adf80bcc5d87_prof);

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
