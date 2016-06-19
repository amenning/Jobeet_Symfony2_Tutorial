<?php

/* EnsJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_309467dc4aa4e68dda56e0dd6b92d0b5ee519ac354cd1d7e83032df940e962e2 extends Twig_Template
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
        $__internal_d252c24fc341594546a9aa2fdfa6fceec91234c62895ad758dab91ed42865be5 = $this->env->getExtension("native_profiler");
        $__internal_d252c24fc341594546a9aa2fdfa6fceec91234c62895ad758dab91ed42865be5->enter($__internal_d252c24fc341594546a9aa2fdfa6fceec91234c62895ad758dab91ed42865be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:JobAdmin:list_image.html.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/JobAdmin/list_image.html.twig -->

<tr>
\t<th>Logo</th>
\t<td><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_d252c24fc341594546a9aa2fdfa6fceec91234c62895ad758dab91ed42865be5->leave($__internal_d252c24fc341594546a9aa2fdfa6fceec91234c62895ad758dab91ed42865be5_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:JobAdmin:list_image.html.twig";
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
