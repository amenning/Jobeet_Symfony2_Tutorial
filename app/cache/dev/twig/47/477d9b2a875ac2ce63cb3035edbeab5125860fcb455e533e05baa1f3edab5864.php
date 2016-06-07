<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fd58a2403034b3952e87a94768c0db321d6e29681002fcc1b486959f29ecdb1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11d4e9820b8dd8ad7dd0f6fd716611b6e7b2771fd103d6d11fda37471a40c692 = $this->env->getExtension("native_profiler");
        $__internal_11d4e9820b8dd8ad7dd0f6fd716611b6e7b2771fd103d6d11fda37471a40c692->enter($__internal_11d4e9820b8dd8ad7dd0f6fd716611b6e7b2771fd103d6d11fda37471a40c692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_11d4e9820b8dd8ad7dd0f6fd716611b6e7b2771fd103d6d11fda37471a40c692->leave($__internal_11d4e9820b8dd8ad7dd0f6fd716611b6e7b2771fd103d6d11fda37471a40c692_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
