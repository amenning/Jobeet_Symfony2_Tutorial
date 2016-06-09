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
        $__internal_19f19cdcb539da59cb02f3d58a741a41076b710ffb2082de83dafd019af0a825 = $this->env->getExtension("native_profiler");
        $__internal_19f19cdcb539da59cb02f3d58a741a41076b710ffb2082de83dafd019af0a825->enter($__internal_19f19cdcb539da59cb02f3d58a741a41076b710ffb2082de83dafd019af0a825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f19cdcb539da59cb02f3d58a741a41076b710ffb2082de83dafd019af0a825->leave($__internal_19f19cdcb539da59cb02f3d58a741a41076b710ffb2082de83dafd019af0a825_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a924233f23233d212b871958fa5c15048405542844d73a7dc4940ed6ba568673 = $this->env->getExtension("native_profiler");
        $__internal_a924233f23233d212b871958fa5c15048405542844d73a7dc4940ed6ba568673->enter($__internal_a924233f23233d212b871958fa5c15048405542844d73a7dc4940ed6ba568673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a924233f23233d212b871958fa5c15048405542844d73a7dc4940ed6ba568673->leave($__internal_a924233f23233d212b871958fa5c15048405542844d73a7dc4940ed6ba568673_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78148ecba3c425fc6079d66add984a5351809aee07f08b5983fb4d8d59f60a1 = $this->env->getExtension("native_profiler");
        $__internal_a78148ecba3c425fc6079d66add984a5351809aee07f08b5983fb4d8d59f60a1->enter($__internal_a78148ecba3c425fc6079d66add984a5351809aee07f08b5983fb4d8d59f60a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a78148ecba3c425fc6079d66add984a5351809aee07f08b5983fb4d8d59f60a1->leave($__internal_a78148ecba3c425fc6079d66add984a5351809aee07f08b5983fb4d8d59f60a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f89b078b90f4447652a7e081c1426e07903f7f1445884acc537849b5a8eea73 = $this->env->getExtension("native_profiler");
        $__internal_8f89b078b90f4447652a7e081c1426e07903f7f1445884acc537849b5a8eea73->enter($__internal_8f89b078b90f4447652a7e081c1426e07903f7f1445884acc537849b5a8eea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8f89b078b90f4447652a7e081c1426e07903f7f1445884acc537849b5a8eea73->leave($__internal_8f89b078b90f4447652a7e081c1426e07903f7f1445884acc537849b5a8eea73_prof);

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
