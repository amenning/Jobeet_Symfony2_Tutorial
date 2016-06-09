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
        $__internal_453ad6ef99938b73be5a5f018214345050769809221cd848710469c233b763dc = $this->env->getExtension("native_profiler");
        $__internal_453ad6ef99938b73be5a5f018214345050769809221cd848710469c233b763dc->enter($__internal_453ad6ef99938b73be5a5f018214345050769809221cd848710469c233b763dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453ad6ef99938b73be5a5f018214345050769809221cd848710469c233b763dc->leave($__internal_453ad6ef99938b73be5a5f018214345050769809221cd848710469c233b763dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6eb850d49bcc5dfe37dc475bbd5f3e1c55868c47d835b08df0810969824cec0a = $this->env->getExtension("native_profiler");
        $__internal_6eb850d49bcc5dfe37dc475bbd5f3e1c55868c47d835b08df0810969824cec0a->enter($__internal_6eb850d49bcc5dfe37dc475bbd5f3e1c55868c47d835b08df0810969824cec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6eb850d49bcc5dfe37dc475bbd5f3e1c55868c47d835b08df0810969824cec0a->leave($__internal_6eb850d49bcc5dfe37dc475bbd5f3e1c55868c47d835b08df0810969824cec0a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6961eb95a0029c62b65f59bfac2efb3f966d2ba85bf298f76c615d0b107211 = $this->env->getExtension("native_profiler");
        $__internal_1f6961eb95a0029c62b65f59bfac2efb3f966d2ba85bf298f76c615d0b107211->enter($__internal_1f6961eb95a0029c62b65f59bfac2efb3f966d2ba85bf298f76c615d0b107211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f6961eb95a0029c62b65f59bfac2efb3f966d2ba85bf298f76c615d0b107211->leave($__internal_1f6961eb95a0029c62b65f59bfac2efb3f966d2ba85bf298f76c615d0b107211_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1448f7633a78731d8099256cd14c6561ea71fdeed9beaeb88d67a45380084b06 = $this->env->getExtension("native_profiler");
        $__internal_1448f7633a78731d8099256cd14c6561ea71fdeed9beaeb88d67a45380084b06->enter($__internal_1448f7633a78731d8099256cd14c6561ea71fdeed9beaeb88d67a45380084b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1448f7633a78731d8099256cd14c6561ea71fdeed9beaeb88d67a45380084b06->leave($__internal_1448f7633a78731d8099256cd14c6561ea71fdeed9beaeb88d67a45380084b06_prof);

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
