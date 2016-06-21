<?php

/* @EnsJobeet/JobAdmin/list_image.html.twig */
class __TwigTemplate_063f99bc233364714f069f7f307e3dbf37d755bdfdf08330ee1c5cee0804a152 extends Twig_Template
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
        $__internal_9ead084d6f895406422b6c2cd59a532c5bf8bb34ae6a1c5900a84d21019f13b0 = $this->env->getExtension("native_profiler");
        $__internal_9ead084d6f895406422b6c2cd59a532c5bf8bb34ae6a1c5900a84d21019f13b0->enter($__internal_9ead084d6f895406422b6c2cd59a532c5bf8bb34ae6a1c5900a84d21019f13b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/JobAdmin/list_image.html.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/JobAdmin/list_image.html.twig -->

<tr>
\t<th>Logo</th>
\t<td><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_9ead084d6f895406422b6c2cd59a532c5bf8bb34ae6a1c5900a84d21019f13b0->leave($__internal_9ead084d6f895406422b6c2cd59a532c5bf8bb34ae6a1c5900a84d21019f13b0_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/JobAdmin/list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/JobAdmin/list_image.html.twig -->*/
/* */
/* <tr>*/
/* 	<th>Logo</th>*/
/* 	<td><img src="{{ asset(object.webPath) }}" /></td>*/
/* </tr>*/
