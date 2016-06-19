<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_44f295c7271cc5cc8afc2c21c922047e82dbccff4d81fd1e16fbe1593dcb442c extends Twig_Template
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
        $__internal_cb30383708ed49cb1aaee17e441c542eafccfaaf811abd22cd9e678b8a167cbe = $this->env->getExtension("native_profiler");
        $__internal_cb30383708ed49cb1aaee17e441c542eafccfaaf811abd22cd9e678b8a167cbe->enter($__internal_cb30383708ed49cb1aaee17e441c542eafccfaaf811abd22cd9e678b8a167cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cb30383708ed49cb1aaee17e441c542eafccfaaf811abd22cd9e678b8a167cbe->leave($__internal_cb30383708ed49cb1aaee17e441c542eafccfaaf811abd22cd9e678b8a167cbe_prof);

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
