<?php

/* EnsJobeetBundle:job:index.atom.twig */
class __TwigTemplate_cd1dc2b14c586c2c45cae66ac2e812bf8a317eeadc11970ebbe80608d066940e extends Twig_Template
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
        $__internal_229781e1ce1057affcb5e114faf2a2c9c484857add81c07fbd57ae58c8eeef07 = $this->env->getExtension("native_profiler");
        $__internal_229781e1ce1057affcb5e114faf2a2c9c484857add81c07fbd57ae58c8eeef07->enter($__internal_229781e1ce1057affcb5e114faf2a2c9c484857add81c07fbd57ae58c8eeef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:job:index.atom.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Job/index.atom.twig -->
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
\t<title>Jobeet</title>
\t<subtitle>Latest Jobs</subtitle>
\t<link href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ens_job_index", array("_format" => "atom"));
        echo "\" rel=\"self\" />
\t<link href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("ens_jobeet_homepage");
        echo "\" />
\t<updated>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : $this->getContext($context, "lastUpdated")), "html", null, true);
        echo "</updated>
\t<author><name>Jobeet</name></author>
\t<id>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>
\t
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 14
                echo "    <entry>
      <title>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo ")</title>
      <link href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\" />
      <id>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</id>
      <updated>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
                // line 21
                if ($this->getAttribute($context["entity"], "logo", array())) {
                    // line 22
                    echo "            <div>
              <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                    echo "\">
                <img src=\"http://";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                    echo " logo\" />
              </a>
            </div>
          ";
                }
                // line 28
                echo "          <div>
            ";
                // line 29
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
                echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
                echo "</p>
        </div>
      </summary>
      <author><name>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</name></author>
    </entry>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</feed>";
        
        $__internal_229781e1ce1057affcb5e114faf2a2c9c484857add81c07fbd57ae58c8eeef07->leave($__internal_229781e1ce1057affcb5e114faf2a2c9c484857add81c07fbd57ae58c8eeef07_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  114 => 35,  108 => 32,  102 => 29,  99 => 28,  88 => 24,  84 => 23,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  59 => 15,  56 => 14,  51 => 13,  47 => 12,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/Job/index.atom.twig -->*/
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/* 	<title>Jobeet</title>*/
/* 	<subtitle>Latest Jobs</subtitle>*/
/* 	<link href="{{ url('ens_job_index', {'_format': 'atom'}) }}" rel="self" />*/
/* 	<link href="{{ url('ens_jobeet_homepage') }}" />*/
/* 	<updated>{{ lastUpdated }}</updated>*/
/* 	<author><name>Jobeet</name></author>*/
/* 	<id>{{ feedId }}</id>*/
/* 	*/
/* {% for category in categories %}*/
/*   {% for entity in category.activejobs %}*/
/*     <entry>*/
/*       <title>{{ entity.position }} ({{ entity.location }})</title>*/
/*       <link href="{{ url('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}" />*/
/*       <id>{{ entity.id }}</id>*/
/*       <updated>{{ entity.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*       <summary type="xhtml">*/
/*         <div xmlns="http://www.w3.org/1999/xhtml">*/
/*           {% if entity.logo %}*/
/*             <div>*/
/*               <a href="{{ entity.url }}">*/
/*                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }}" alt="{{ entity.company }} logo" />*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div>*/
/*             {{ entity.description|nl2br }}*/
/*           </div>*/
/*           <h4>How to apply?</h4>*/
/*           <p>{{ entity.howtoapply }}</p>*/
/*         </div>*/
/*       </summary>*/
/*       <author><name>{{ entity.company }}</name></author>*/
/*     </entry>*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* </feed>*/
