<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4e50ee15d6a4dcbfa53edde3a4a6df1dba616cb6aa5d80ae740833dcea761f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aa832752bd076039d7067e11be39fbf1f65c521e2bae1ba9b150dbf8e200fd4 = $this->env->getExtension("native_profiler");
        $__internal_2aa832752bd076039d7067e11be39fbf1f65c521e2bae1ba9b150dbf8e200fd4->enter($__internal_2aa832752bd076039d7067e11be39fbf1f65c521e2bae1ba9b150dbf8e200fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_2aa832752bd076039d7067e11be39fbf1f65c521e2bae1ba9b150dbf8e200fd4->leave($__internal_2aa832752bd076039d7067e11be39fbf1f65c521e2bae1ba9b150dbf8e200fd4_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_ac9f248094dc3d3e1af5557ec4a3c4adf4a75e83c98d8e416174c6d8e8dde10d = $this->env->getExtension("native_profiler");
        $__internal_ac9f248094dc3d3e1af5557ec4a3c4adf4a75e83c98d8e416174c6d8e8dde10d->enter($__internal_ac9f248094dc3d3e1af5557ec4a3c4adf4a75e83c98d8e416174c6d8e8dde10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_ac9f248094dc3d3e1af5557ec4a3c4adf4a75e83c98d8e416174c6d8e8dde10d->leave($__internal_ac9f248094dc3d3e1af5557ec4a3c4adf4a75e83c98d8e416174c6d8e8dde10d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
